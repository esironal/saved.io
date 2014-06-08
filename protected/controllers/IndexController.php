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
			$list = Lists::model()->findByPk($list);
		else
			$list = null;

		if($list)
			$bookmarks = $list->bookmarks;
		elseif($q)
			$bookmarks = Yii::app()->user->model->bookmarks(['condition' => 'title LIKE :title OR url LIKE :title', 'params' => ['title' => sprintf('%%%s%%', $q)]]);
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
		echo 'hello!';
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