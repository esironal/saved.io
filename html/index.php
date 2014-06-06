<?php

ini_set('display_errors', true);
error_reporting(E_ALL | E_NOTICE | E_STRICT);

$yii = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'framework' . DIRECTORY_SEPARATOR . 'yii.php';
$config = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..'. DIRECTORY_SEPARATOR . 'protected'. DIRECTORY_SEPARATOR . 'config'. DIRECTORY_SEPARATOR . 'main.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once($yii);
Yii::createWebApplication($config)->run();