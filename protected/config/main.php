<?php

return [
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'Saved.io',
	'defaultController' => 'index',
	'runtimePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .  '..' . DIRECTORY_SEPARATOR . 'runtime',

	'preload' => ['log'],

	'import' => [
		'application.models.*',
		'application.components.*',
	],

	'components' => [
		'user' => [
			'allowAutoLogin'=>true,
		],
		'urlManager' => [
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => [
				'/' => 'index/index',
				'register' => 'index/register',
				'preset' => 'index/preset',
				'about' => 'index/about',
				'blog' => 'index/blog',
				'api' => 'index/api',
				'apps' => 'index/apps',
				'faq' => 'index/faq',
				'contact' => 'index/contact',
				'donate' => 'index/donate',

				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			],
		],
		'db' => [
			'connectionString' => 'mysql:host=localhost;dbname=saved',
			'emulatePrepare' => true,
			'username' => 'saved',
			'password' => 'saved',
			'charset' => 'utf8',
		],
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