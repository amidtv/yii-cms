<?php

Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
        'theme'=>'bootstrap',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Пробная CMS',
	'language'=>'ru',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
	'admin',
            'test',
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
	'class' => 'system.gii.GiiModule',
	'password'=>'123',
	// If removed, Gii defaults to localhost only. Edit carefully to taste.
	'ipFilters' => array('127.0.0.1', '::1'),
	'generatorPaths'=>array(
		'bootstrap.gii',
	),
),
		
	),

	// application components
	'components'=>array(
            'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
		'user'=>array(
			'class' => 'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'authManager' => array(
			// Будем использовать свой менеджер авторизации
			'class' => 'PhpAuthManager',
			// Роль по умолчанию. Все, кто не админы, модераторы и юзеры — гости.
			'defaultRoles' => array('guest'),
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
			'showScriptName'=>false,
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yiicms',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			'tablePrefix'=>'cms_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);