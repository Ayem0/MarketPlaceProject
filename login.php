<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
<?php
	require('fonction.php');
	headertest();
	navigation();
	breadcrumb();	
?>
	

		<!-- /LOGIN FORM-->
		<div id="loginform" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row" id="login-form-wrap">
					<h2>Login</h2>
					<form id="login-form">
					  <p>
					  <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
					  </p>
					  <p>
					  <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
					  </p>
					  <p>
					  <input type="submit" id="login" value="Login">
					  </p>
					</form>
					<div id="create-account-wrap">
					  <p>Not a member? <a href="createaccount.html">Create Account</a><p>
					</div><!--create-account-wrap-->
				</div><!--login-form-wrap-->
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /LOGIN FORM -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?php
		newsletter();
		footer();
?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
