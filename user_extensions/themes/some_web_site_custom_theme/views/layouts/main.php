<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language?>">
<head>
	<meta charset="utf-8">

    <title>Theme template made with &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="author" content="">

	<link href="<?php echo Yii::app()->baseUrl?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
		body {
			padding-top: 20px;
			padding-bottom: 60px;
		}

		/* Custom container */
		.container {
			margin: 0 auto;
			max-width: 1000px;
		}

		.container > hr {
			margin: 60px 0;
		}

		/* Main marketing message and sign up button */
		.jumbotron {
			margin: 80px 0;
			text-align: center;
		}

		.jumbotron h1 {
			font-size: 100px;
			line-height: 1;
		}

      	.jumbotron .lead {
			font-size: 24px;
			line-height: 1.25;
		}

		.jumbotron .btn {
			font-size: 21px;
			padding: 14px 24px;
		}

		/* Supporting marketing content */
		.marketing {
			margin: 60px 0;
		}

		.marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
		.navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
		.navbar .nav li:last-child a {
			border-right: 0;
			border-radius: 0 3px 3px 0;
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

		<div class="masthead">
			<h3 class="muted">Custom theme name</h3>
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
							<li class="<?php echo $this->id == 'site' ? 'active' : ''?>">
								<a href="<?php _u('/')?>">Home</a>
							</li>
							<li class="<?php echo isset($this->module) && $this->module->id == 'test' ? 'active' : ''?>">
								<a href="<?php _u('/test')?>">Test module</a>
							</li>
							<li class="<?php echo isset($this->module) && $this->module->id == 'blog' ? 'active' : ''?>">
								<a href="<?php _u('/blog')?>">Blog</a>
							</li>
							<li><a href="<?php _u('/admin')?>" target="_blank">Admin panel</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<?php echo $content?>	

		<hr>

      	<div class="footer">
			<p>&copy; Company 2013</p>
		</div>

	</div>

</body>
</html>
