<?php

return [
	'mail' => [
		'host' => 'smtp.yandex.ru',
		'username' => 'saved.io@yandex.ru',
		'password' => 'Qq1Ww2Ee3',
		'port' => '465',
		'encryption' => 'tls',
	],
	'db' => [
		'connectionString' => 'mysql:host=localhost;dbname=saved',
		'emulatePrepare' => true,
		'username' => 'saved',
		'password' => 'saved',
		'charset' => 'utf8',
	]
];