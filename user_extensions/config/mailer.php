<?php
	defined('YII_APP') || die;

	die('Change e-mail subsystem config settings if needed in file: '.__FILE__.". Then comment out die() there!");

	$emailer_config = 	array(
							'class' 		=>	'application.extensions.mailer.EMailer',
							'pathViews' 	=>	'application.views.email',
							'pathLayouts' 	=>	'application.views.email.layouts',
							'From'			=>	'email@server.com',
							'FromName'		=>	'Noreply',
							'CharSet'		=>	'UTF-8',
							//'Host' 		=>	'',//e.g. ssl://smtp.gmail.com
							'Port'			=>	25,//or e.g. 465 for smtp.gmail.com
							'Timeout'		=>	90,
							'Mailer'		=>	'mail',//'smtp', 'mail'
							//'SMTPAuth'	=>	true,
							//'Username'	=>	'<smtp_auth_username>',
							//'Password'	=>	'<smtp_auth_password>',
						);
