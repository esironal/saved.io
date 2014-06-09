<?php

class ApiController extends CController
{
	public function renderJSON($data, $isError = false)
	{
		header('Content-Type: application/json; charset=utf-8');

		if($isError)
			header("HTTP/1.0 400 Bad Request");
		else
			header("HTTP/1.0 200 OK");

		echo json_encode($data);
		Yii::app()->end();
	}

	public function actionCreate()
	{
		$token = Yii::app()->request->getParam('token');
		$url = Yii::app()->request->getParam('url');
		$title = Yii::app()->request->getParam('title');
		$list = Yii::app()->request->getParam('list');

		$user = Users::model()->find('`key` = :key', ['key' => $token]);

		if($user === null)
			$this->renderJSON(['is_error' => true, 'message' => 'Invalid User Token']);

		if(Yii::app()->request->getPost('token') !== $token)
			$this->renderJSON("Only accepts POST requests");

		$urlValidator = new CUrlValidator;
		if(!$urlValidator->validateValue($url))
			$this->renderJSON(['is_error' => true, 'data' => '', 'message' => 'Not valid URL']);

		$bookmark = new Bookmarks;

		if(!empty($list))
		{
			$list = $user->lists(['condition' => 'name = :name', 'params' => ['name' => $list]]);

			if(empty($list))
				$this->renderJSON(['is_error' => true, 'data' => '', 'message' => 'Not valid list']);
			else
				$bookmark->list_id = $list[0]->id;
		}

		if(!empty($title))
			$bookmark->title = $title;
		else
		{
			$curl = curl_init();

			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);

			$body = curl_exec($curl);

			curl_close($curl);

			if($body !== false && preg_match('#<title>([^<]+)#i', $body, $match))
				$bookmark->title = $match[1];
		}

		$bookmark->user_id = $user->id;
		$bookmark->url = $url;

		$bookmark->save();

		$this->renderJSON([
			'is_error' => false,
			'data' => [
				'id' => (int)$bookmark->id,
				'title' => $bookmark->title,
				'list' => $bookmark->list ? $bookmark->list->name : null,
				'url' => $bookmark->url
			],
			'message' => 'Success'
		]);
	}

	public function actionDelete()
	{
		$token = Yii::app()->request->getPost('token');

		$user = Users::model()->find('`key` = :key', ['key' => $token]);

		if($user === null)
			$this->renderJSON(['is_error' => true, 'message' => 'Invalid User Token']);

		$bookmark = Bookmarks::model()->findByPk(Yii::app()->request->getPost('bk_id'));

		$count = 0;
		if($bookmark !== null && $bookmark->user_id == $user->id)
		{
			$bookmark->delete();
			$count++;
		}

		$this->renderJSON([
			'is_error' => false,
			'data' => [
				'rows_deleted' => $count
				],
			'message' => 'Success'
		]);
	}

	public function actionGet($name = null)
	{
		$token = Yii::app()->request->getParam('token');
		$from = Yii::app()->request->getParam('from');
		$to = Yii::app()->request->getParam('to');
		$limit = Yii::app()->request->getParam('limit');

		$user = Users::model()->find('`key` = :key', ['key' => $token]);

		if($user === null)
			$this->renderJSON(['is_error' => true, 'message' => 'Invalid User Token']);

		if(Yii::app()->request->getPost('token') === $token)
			$this->renderJSON("Only accepts GET requests");

		$bookmarks = [];

		$criteria = new CDbCriteria;

		if(!empty($from) && is_numeric($from))
		{
			$criteria->addCondition('UNIX_TIMESTAMP(addition_date) >= :from');
			$criteria->params['from'] = (int)$from;
		}

		if(!empty($limit) && is_numeric($limit))
		{
			$criteria->addCondition('UNIX_TIMESTAMP(addition_date) <= :to');
			$criteria->params['to'] = (int)$to;
		}

		if(!empty($to) && is_numeric($to))
			$criteria->limit = $limit;
		
		foreach($user->bookmarks($criteria) as $bookmark)
			$bookmarks[] = [
				'bk_id' => $bookmark->id,
				'url' => $bookmark->url,
				'title' => $bookmark->title,
				'list' => $bookmark->list_id ?: '0',
				'list_name' => $bookmark->list ? $bookmark->list->name : null,
				'creation_date' => $bookmark->addition_date
			];

		$this->renderJSON($bookmarks);
	}

	public function actionLists()
	{
		$token = Yii::app()->request->getParam('token');

		$user = Users::model()->find('`key` = :key', ['key' => $token]);

		if($user === null)
			$this->renderJSON(['is_error' => true, 'message' => 'Invalid User Token']);

		if(Yii::app()->request->getPost('token') === $token)
			$this->renderJSON("Only accepts GET requests");

		$lists = [];

		foreach($user->lists as $list)
			$lists[] = [
				'id' => $list->id,
				'name' => $list->name
			];

		$this->renderJSON($lists);
	}
}