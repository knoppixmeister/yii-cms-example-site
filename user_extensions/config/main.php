<?php
	defined('YII_APP') || die;

	require dirname(__FILE__).'/db.php';
	require dirname(__FILE__).'/mailer.php';

	// uncomment the following to define a path alias
	Yii::setPathOfAlias('user_extensions', FULL_BASE_PATH.'/user_extensions');
	Yii::setPathOfAlias('user_modules', FULL_BASE_PATH."/user_extensions/modules");

	// This is the main Web application configuration. Any writable
	// CWebApplication properties can be configured here.

	$basePath = dirname(__FILE__).'/../../cms/protected';

	require_once $basePath.'/components/helpers.php';

	/**
		AUTOMATIC MODULES SEARCH AND RESOLVING.

		ASSIGN $modules array to 'modules' into return array.
	 */

	/*
	$modules = array();
	if($dres = opendir($basePath."/modules")) {
		while(false !== ($entry = readdir($dres))) {
			if($entry != '.' && $entry != ".." && is_dir($basePath."/modules/".$entry)) {
				$modules[] = strtolower($entry);
			}
		}
	}

	if(is_dir(Yii::getPathOfAlias('user_modules'))) {
		if($dres = opendir(Yii::getPathOfAlias('user_modules'))) {
			while(false !== ($entry = readdir($dres))) {
				if($entry != '.' && $entry != ".." && is_dir(Yii::getPathOfAlias('user_modules')."/".$entry)) {
					$modules[$entry] = 	array(
											'class'	=>	'user_modules.'.$entry.".".ucfirst($entry)."Module",
										);
				}
			}
		}
	}
	*/

	return array(
				'basePath'			=>	$basePath,
				'name'				=>	'some_web_site.com',

				'sourceLanguage'	=>	'en',
				'language'			=>	'en',

				'defaultController'	=>	'site',

				'theme'				=>	'some_web_site_custom_theme',

				// preloading 'log' component
				'preload'		=>	array('log'),

				// autoloading model and component classes
				'import'		=>	array(
										//'application.models.*',

										'application.components.*',
										'application.helpers.*',
									),

				'modules'	=>	array(
									//SYSTEM MODULES SECTION
									'admin',
									'auth',
									'blog',
									'pages',
									'users',

									//USER MODULES SECTION
									'test'	=>	array(
													'class'	=>	'user_modules.test.TestModule',
												),

									//....
									//MORE MODULES PLACE HERE!
								),

				'components' => array(
									'mailer' =>	$emailer_config,

									'user'	=>	array(
													'allowAutoLogin'	=>	true,
												),

									'themeManager'	=>	array(
															'basePath'	=>	'user_extensions/themes',
														),

									'urlManager'	=>	array(
															//'class'			=>	'application.components.UrlManager',
															'urlFormat'			=>	'path',
															'showScriptName'	=>	false,

															'rules'	=>	array(
																			'admin/auth/<action:\w+>'										=>	'auth/admin/<action>',

																			'admin/<module:\w+>/<action:\w+>/<id:\d+>'						=>	'<module>/admin/<action>',
																			'admin/<module:\w+>/<action:\w+>'								=>	'<module>/admin/<action>',
																			'admin/<module:\w+>'											=>	'<module>/admin',

																			'admin'															=>	'admin',

																			'<controller:\w+>/<action:\w+>'									=>	'<controller>/<action>',
																			'<controller:\w+>'												=>	'<controller>',
																		),
														),

			'db' 		=>		$db_config,

			'messages'	=>		array(
									'basePath'		=>	'user_extensions/messages',
								),

			'errorHandler'	=>	array(
									// use 'site/error' action to display errors
									'errorAction'	=>	'site/error',
								),

			'log'			=>	array(
									'class'		=>	'CLogRouter',
									'routes'	=>	array(
														array(
															'class'		=>	'CFileLogRoute',
															'levels'	=>	'error, warning',
														),
														// uncomment the following to show log messages on web pages
														/*
														array(
															'class'=>'CWebLogRoute',
														),
														*/
														array(
															'class'			=>	'application.components.CAppEmailLogRoute',
															'levels'		=>	'error, warning',
															'emails'		=>	'some_email@server.com',
															'enabled'		=>	true,
														),
													),
								),
		),

		// application-level parameters that can be accessed
		// using Yii::app()->params['paramName']
		'params' =>	array(
						// this is used in contact page
						//'adminEmail'	=>	'webmaster@example.com',
						//'languages'	=>	array('en' => 'English', ),
					),
	);
