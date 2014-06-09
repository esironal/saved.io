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
		'format' => [
			'class' => 'ext.timeago.TimeagoFormatter',
		],
		'mail' => [
			'class' => 'ext.yii-mail.YiiMail',
			'transportType' => 'smtp',
			'viewPath' => 'application.views.email',
			'logging' => true,
			'dryRun' => false,
			'transportOptions' => $environment['mail']
		],
		'user' => [
			'class' => 'WebUser',
			'allowAutoLogin' => true,
		],
		'session' => [
			'cookieParams' => [
				'domain' => '.' . $_SERVER['SERVER_NAME'],
			]
		],
		'urlManager' => [
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => [
				'register' => 'auth/register',
				'preset' => 'auth/preset',
				'presetFinish' => 'auth/presetFinish',
				'logout' => 'auth/logout',
				
				'<view:about|api|apps|faq>' => 'static/page',
				'bookmarklet.js' => 'static/bookmarklet',

				'api/v1/<action:create|delete|lists>' => 'api/<action>',
				'api/v1/bookmarks' => 'api/get',
				'api/v1/bookmarks/<name>' => 'api/get',

				'/' => 'index/index',
				'key' => 'index/key',
				'delete' => 'index/delete',
				'edit' => 'index/edit',
				'add' => 'index/add',
				'<url:.*>' => 'index/addBySuffix',
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