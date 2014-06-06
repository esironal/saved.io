<?php

class StaticController extends CController
{
	public function actions()
	{
		return [
			'page' => [
				'class' => 'CViewAction',
				'layout' => 'static'
			],
		];
	}

	public function actionBookmarklet()
	{
		$this->layout = false;
		header('Content-Type: application/x-javascript');
		$this->render('bookmarklet');
	}
}