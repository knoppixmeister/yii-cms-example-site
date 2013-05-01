<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Admin theme sign in layout made with &middot; Twitter Bootstrap</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="">
	<meta name="author" content="">

	<link href="<?php echo Yii::app()->baseUrl?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.form-signin {
			max-width: 400px;
			padding: 19px 29px 29px;
			margin: 0 auto 20px;
			background-color: #fff;
			border: 1px solid #e5e5e5;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			box-shadow: 0 1px 2px rgba(0,0,0,.05);
		}

		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}

		.form-signin input[type="text"],
		.form-signin input[type="password"] {
			font-size: 16px;
			height: auto;
			margin-bottom: 15px;
			padding: 7px 9px;
		}
    </style>
    <link href="<?php echo Yii::app()->baseUrl?>/assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
		<script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="../assets/ico/favicon.png">
	-->
</head>
<body>

	<div class="container">

		<?php
			$form = $this->beginWidget('CActiveForm',	array(
															'htmlOptions'	=>	array('class'	=>	"form-signin", ),
														));
		?>

			<h2 class="form-signin-heading">Administrator sign in</h2>

		<?php
			if(CHtml::errorSummary($model, '') != '') {
		?>
			<div class="alert alert-error">
				<button data-dismiss="alert" class="close" type="button">×</button>
				<?php echo CHtml::errorSummary($model, '', '')?>
			</div>
		<?php
			}

			echo $form->textField($model, 'username', array('class' => "input-block-level", 'placeholder' => "Username or Email address", ));
			echo $form->passwordField($model, 'password', array('class' => "input-block-level", 'placeholder' => "Password", ));
		?>
			<!--
			<label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me
			</label>
			-->
			<button class="btn btn-large btn-primary" type="submit">Sign in</button>

		<?php $this->endWidget()?>

	</div>

</body>
</html>
