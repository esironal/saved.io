<?php
$environment = require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'environment.php';

return [
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'Saved.io',
	'defaultController' => 'index',
	'runtimePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .  '..' . DIRECTORY_SEPARATOR . 'runtime',

	'preload' => ['log'],

	'import' => [
		'application.models.*',
		'application.components.*',
		'application.extensions.yii-mail.*',
	],

	'components' => [
		'mail' => [
			'class' => 'ext.yii-mail.YiiMail',
			'transportType' => 'smtp',
			'viewPath' => 'application.views.email',
			'logging' => true,
			'dryRun' => false,
			'transportOptions' => $environment['mail']
		],
		'user' => [
			'allowAutoLogin'=>true,
		],
		'urlManager' => [
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => [
				'/' => 'index/index',
				'key' => 'index/key',
				'add' => 'index/add',

				'register' => 'auth/register',
				'preset' => 'auth/preset',
				'presetFinish' => 'auth/presetFinish',
				'logout' => 'auth/logout',
				
				'<view:about|api|apps|faq>' => 'static/page',
				'bookmarklet.js' => 'static/bookmarklet',

				'api/<action:create|delete|lists>' => 'api/<action>',
				'api/bookmarks/<name>' => 'api/bookmarks',

				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			],
		],
		'db' => $environment['db'],
		'errorHandler' => [
			'errorAction' => 'index/error',
		],
		'log' => [
			'class' => 'CLogRouter',
			'routes' => [
				[
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				],
				// ['class'=>'CWebLogRoute'],
			],
		],
	],
];