<?php
Yii::setPathOfAlias('bootstrap',dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Управление системой учета трафика',
        'charset' => 'utf-8',
        'sourceLanguage' => 'ru',
        'language' => 'ru',
        'defaultController' => 'persons',
//        'theme' => 'bootstrap',
	'preload'=>array('log'),
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),
	'components'=>array(
            'user'=>array(
                'allowAutoLogin'=>true,
            ),
            'clientScript' => array(
                'packages' => array(
                    'tableForm'=> array(
                        'baseUrl' => 'js/jquery/',
                        'js' => array('jquery.tableForm.js'),
                        'depends' => array('jquery','jform'),
                    ),
                    'jform'=> array(
                        'baseUrl' => 'js/jquery/',
                        'js'=>array('jquery.form.js'),
                        'depends'=> array('jquery')
                    ),
                ),
            ),
            'bootstrap'=>array(
                'class'=>'bootstrap.components.Bootstrap',
            ),
            // uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
/*		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		), */
		// uncomment the following to use a MySQL database
            'db'=>array(
                'connectionString' => 'mysql:host=10.128.1.2;dbname=traf',
                'emulatePrepare' => true,
                'username' => 'traf',
                'password' => '',
                'charset' => 'utf8',
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