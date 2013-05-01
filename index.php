<?php
	define('YII_APP', true);
	define('FULL_BASE_PATH', dirname(__FILE__));

	date_default_timezone_set('Europe/Riga');

	$yii	=	dirname(__FILE__).'/../yii/framework/yii.php';
	$config	=	dirname(__FILE__).'/user_extensions/config/main.php';

	// remove the following lines when in production mode
	defined('YII_DEBUG') or define('YII_DEBUG', false);
	// specify how many levels of call stack should be shown in each log message
	defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

	if(defined('YII_DEBUG') && YII_DEBUG == true) ini_set('display_errors', 'on');
	else ini_set('display_errors', 'off');

	require_once($yii);

	$app = Yii::createWebApplication($config);
	$app->run();
