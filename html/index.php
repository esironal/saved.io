<?php

ini_set('display_errors', true);
error_reporting(E_ALL | E_NOTICE | E_STRICT);
unset($_SERVER['HTTP_HOST']);
ini_set('session.cookie_domain', '.' . $_SERVER['SERVER_NAME']);

$yii = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'framework' . DIRECTORY_SEPARATOR . 'yii.php';
$config = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..'. DIRECTORY_SEPARATOR . 'protected'. DIRECTORY_SEPARATOR . 'config'. DIRECTORY_SEPARATOR . 'main.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once($yii);
$app = Yii::createWebApplication($config);
Yii::app()->onBeginRequest = function($event){
	$rule = Yii::app()->urlManager->parseUrl(Yii::app()->request);

	if($rule !== 'index/addBySuffix' && mb_strlen($_SERVER['SUBDOMAIN']))
		Yii::app()->request->redirect(Yii::app()->request->requestUri);
};
$app->run();
