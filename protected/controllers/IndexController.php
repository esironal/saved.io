<?php

class IndexController extends CController
{
	public function actionIndex()
	{
		if(Yii::app()->user->isGuest)
			$this->forward('auth/login');

		$this->render('index');
	}

	public function actionKey()
	{
		$this->render('key');
	}

	public function actionAdd()
	{
		//$this->render('add');
	}

	public function actionError()
	{
		if($error = Yii::app()->errorHandler->error)
			$this->render('error', $error);
	}
}