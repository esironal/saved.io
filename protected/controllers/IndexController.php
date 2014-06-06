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
		$this->render('register');
	}

	public function actionPreset()
	{
		$this->render('preset');
	}

	public function actionAbout()
	{
		$this->render('about');
	}

	public function actionBlog()
	{
		$this->render('blog');
	}

	public function actionApi()
	{
		$this->render('api');
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