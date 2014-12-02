<?php



// This is the main Web application configuration. Any writable
// application properties can be configured here.
	return array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'No Smoking Unless You Want',

		// path aliases
	    'aliases' => array(
	        'bootstrap' => realpath(__DIR__ . '\..\extensions\bootstrap'), // change this if necessary
	    ),


		// autoloading model and component classes
		'import'=>array(
			'application.models.*',
			'application.components.*',
		),
	

	    // application modules
	    'modules' => array(
	        'gii' => array(
	            'generatorPaths' => array('bootstrap.gii'),
	        ),
	    ),


		'defaultController'=>'site',

		// application components
		'components'=>array(
	        'db'=>array(
	            'connectionString' => 'mysql:host=localhost;dbname=web_database',
	            'emulatePrepare' => true,
	            'username' => 'root',
	            'password' => '',
	            'charset' => 'utf8'
	        ),

	        'thumb'=>array(
 				'class'=>'ext.CThumb.CThumb',
 			),

 			'bigThumb'=>array(
 				'class'=>'ext.CThumb.BigCThumb',
 			),

 			

		),

		'controllerMap'=>array(
        	'ueditor'=>array(
            	'class'=>'ext.baiduUeditor.UeditorController',
        ),
    ),

);