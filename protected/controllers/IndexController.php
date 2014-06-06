<?php

class IndexController extends CController
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionError()
	{
		if($error = Yii::app()->errorHandler->error)
			$this->render('error', $error);
	}
}