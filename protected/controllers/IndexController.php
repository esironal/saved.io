<?php

class IndexController extends CController
{
	public function actionIndex()
	{
		if(Yii::app()->user->isGuest)
			$this->forward('auth/login');
		else
			$this->forward('list');
	}
	
	public function actionList()
	{
		$list = Yii::app()->request->getParam('listl');
		$q = Yii::app()->request->getParam('q');

		if($list)
		{
			$list = Lists::model()->findByPk($list);

			if($list !== null && $list->user_id != Yii::app()->user->id)
				$list = null;
		}
		else
			$list = null;

		if($list && Yii::app()->request->isPostRequest)
		{
			if(Yii::app()->request->getPost('list_delete') !== null)
			{
				$list->delete();
			}
			elseif(Yii::app()->request->getPost('list_delete_all') !== null)
			{
				foreach($list->bookmarks as $bookmark)
					$bookmark->delete();

				$list->delete();
			}
			
			$this->redirect(['index/index']);
		}

		if($list)
			$bookmarks = $list->bookmarks;
		elseif($q)
			$bookmarks = Yii::app()->user->model->bookmarks(['condition' => 'title LIKE :pattern OR url LIKE :pattern OR note LIKE :pattern', 'params' => ['pattern' => sprintf('%%%s%%', $q)]]);
		else
			$bookmarks = Yii::app()->user->model->bookmarks;

		$lists = Yii::app()->user->model->lists;

		$this->render('index', ['bookmarks' => $bookmarks, 'lists' => $lists, 'currentList' => $list]);
	}

	public function actionKey()
	{
		$this->render('key');
	}

	public function actionAdd()
	{
		//$this->render('add');
	}

	public function actionAddBySuffix()
	{
		$url = mb_substr(Yii::app()->request->requestUri, 1);

		if(!in_array(mb_substr($url, 0, 7), ['http://', 'https:/'], true))
			$url = 'http://' . $url;

		if(mb_strlen($url))
		{
			$bookmark = new Bookmarks;

			$bookmark->user_id = Yii::app()->user->id;
			$bookmark->url = $url;
			$bookmark->title = $url;

			if(($host = parse_url($url, PHP_URL_HOST)) !== null)
			{
				$bookmark->title = $host;

				$curl = curl_init();

				curl_setopt($curl, CURLOPT_URL, $url);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);

				$body = curl_exec($curl);

				curl_close($curl);

				if($body !== false && preg_match('#<title>([^<]+)#i', $body, $match))
					$bookmark->title = $match[1];
			}

			$subdomain = isset($_SERVER['SUBDOMAIN']) ? $_SERVER['SUBDOMAIN'] : '';

			if(mb_strlen($subdomain))
			{
				$list = Yii::app()->user->model->lists(['condition' => 'name = :name', 'params' => ['name' => $subdomain]]);
				
				if(count($list) == 0)
				{
					$list = new Lists;

					$list->user_id = Yii::app()->user->id;
					$list->name = $subdomain;

					$list->save();
				}
				else
					$list = $list[0];

				$bookmark->list_id = $list->id;
			}

			$bookmark->save();
		}

		$this->redirect(['index/index']);
	}

	public function actionDelete()
	{
		$bookmark = Bookmarks::model()->findByPk(Yii::app()->request->getParam('bkid'));

		if($bookmark !== null && $bookmark->user_id == Yii::app()->user->id)
			$bookmark->delete();

		$list = Lists::model()->findByPk(Yii::app()->request->getParam('listl'));
		
		if($list !== null && $list->user_id == Yii::app()->user->id)
			$this->redirect(['index/index', 'listl' => $list->id]);
		else
			$this->redirect(['index/index']);
	}

	public function actionEdit()
	{
	}

	public function actionError()
	{
		if($error = Yii::app()->errorHandler->error)
			$this->render('error', $error);
	}
}