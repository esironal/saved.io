<?php

class IndexController extends CController
{
	public function actionIndex()
	{
		$model = new LoginForm;

		if(Yii::app()->request->isPostRequest)
		{
			$model->username = Yii::app()->request->getPost('myemail');
			$model->password = Yii::app()->request->getPost('mypassword');

			if($model->validate())
				$model->login();
		}

		$this->render('index', ['model' => $model]);
	}

	public function actionRegister()
	{
		$user = new Users;

		if(Yii::app()->request->isPostRequest)
		{
			$user->username = Yii::app()->request->getPost('username');
			$user->email = Yii::app()->request->getPost('email');
			$user->password = Yii::app()->request->getPost('password');

			if($user->save())
				$this->redirect(['index/index']);
		}

		$this->render('register', ['user' => $user]);
	}

	public function actionPreset()
	{
		$this->render('preset');
	}

	public function actionAbout()
	{
		$this->render('about');
	}

	public function actionApi()
	{
		$this->render('api');
	}

	public function actionKey()
	{
		$this->render('key');
	}

	public function actionApps()
	{
		$this->render('apps');
	}

	public function actionFaq()
	{
		$this->render('faq');
	}

	public function actionContact()
	{
		$this->render('contact');
	}

	public function actionDonate()
	{
		$this->render('donate');
	}

	public function actionError()
	{
		if($error = Yii::app()->errorHandler->error)
			$this->render('error', $error);
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}