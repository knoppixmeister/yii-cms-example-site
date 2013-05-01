<?php
	defined('YII_APP') || die;

	die('Change database config settings if needed in file: '.__FILE__.". Then comment out die() there!");

	$db_config =	array(
						'connectionString' 	=>	'mysql:host=<db_server>;dbname=<db_name>',
						//'emulatePrepare' 	=>	true,
						'username'			=>	'<db_username>',
						'password'			=>	'<db_password>',
						'charset' 			=>	'utf8',
					);
