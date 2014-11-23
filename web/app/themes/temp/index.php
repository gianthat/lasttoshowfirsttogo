<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Last to Show First to Go is a band.">
		<meta name="author" content="http://lasttoshowfirsttogo.com">
		<title>Last to Show First to Go</title>
		
		<!-- Stylesheets -->
		<link href="app/themes/temp/css/bootstrap.min.css" rel="stylesheet">
		<link href="app/themes/temp/css/font-awesome.min.css" rel="stylesheet">
		<link href="app/themes/temp/css/bootstrapValidator.min.css" rel="stylesheet">
		<link href="app/themes/temp/css/ladda-themeless.min.css" rel="stylesheet">
		<link href="app/themes/temp/css/animate.min.css" rel="stylesheet">
		<link href="app/themes/temp/css/owl.carousel.css" rel="stylesheet">
		<link href="app/themes/temp/css/owl.theme.css" rel="stylesheet">
		<link href="app/themes/temp/css/app.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="app/themes/temp/img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="app/themes/temp/img/favicon/favicon.ico" type="image/x-icon">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Preloader -->
		<div id="preloader">
			<div id="status" class="text-center">
				<div class="spinner">
				  <div class="rect1"></div>
				  <div class="rect2"></div>
				  <div class="rect3"></div>
				  <div class="rect4"></div>
				  <div class="rect5"></div>
				</div>
			</div>
		</div>
		
		<!-- Main -->
		<section class="main text-center" id="home">
			<div class="page">
				<div class="wrapper">
					<div class="container">
						<img class="logo-image" src="app/themes/temp/img/logo/ltsftg-logo.png" alt="Last to Show First to Go">
						<h2>New album coming soon.</h1>
						<div class="row">
							<div id="countdown"></div>
						</div>
						<!-- Subscription form -->
						<form class="form-inline signup" action="app/themes/temp/php/signupForm.php" role="form" id="signupForm">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email address">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-theme ladda-button" data-style="expand-left"><span class="ladda-label">Get updates</span></button>
							</div>
						</form>
					</div>
					
					 
					<div class="arrow-down">
						<a class="scroll" href="#contact" id="scroll"><i class="fa fa-angle-double-down"></i></a>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Contact -->
		<section id="contact" class="section text-center">
			<div class="container">
				<h2>Help us make it.</h1>
				<p>Become a producer of our upcoming album and get swag.</p>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
					">
					<!--<input type="submit" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
					<button type="submit" class="btn btn-theme ladda-button" data-style="expand-left" name="submit"><span class="ladda-label">Become a Producer</span></button>
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<span class="help-block"><small>Goes to Paypal. Account: ralbritton@rrmusiclabs.com</small></span>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 text-left">
						<ul>
							<li><strong>$10</strong> Get your name in the liner notes as a producer</li>
							<li><strong>$15</strong> Above plus get a custom pint glass from which you can drink beer in total style</li>
							<li><strong>$25</strong> Above plus limited-run poster and one of our previous CDs</li>

							<li><strong>$30</strong> Above plus exclusive studio progress MP3s emailed to you weekly</li>

							<li><strong>$50</strong> Above plus a copy of the new album when released and two tickets to album release show</li>

							<li><strong>$75</strong> Above plus invite to sit in on a session</li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="section-title">Contact</h3>
						<div class="section-title-border"></div>

						<h4><a href="mailto:booking@lasttoshowfirsttogo.com">booking@lasttoshowfirsttogo.com</a></h4>

						<footer class="text-center">
							<div class="social">
								<a href="https://www.facebook.com/lasttoshowfirsttogo" class="btn btn-theme"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/ltsftg" class="btn btn-theme"><i class="fa fa-twitter"></i></a>
							</div>
						</footer>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="app/themes/temp/js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="app/themes/temp/js/bootstrap.min.js"></script>
		<script src="app/themes/temp/js/jquery.backstretch.min.js"></script>
		<script src="app/themes/temp/js/jquery.countdown.min.js"></script>
		<script src="app/themes/temp/js/bootstrapValidator.min.js"></script>
		<script src="app/themes/temp/js/validator/emailAddress.js"></script>
		<script src="app/themes/temp/js/spin.min.js"></script>
		<script src="app/themes/temp/js/ladda.min.js"></script>
		<script src="app/themes/temp/js/retina.min.js"></script>
		<script src="app/themes/temp/js/wow.min.js"></script>
		<script src="app/themes/temp/js/owl.carousel.min.js"></script>
		<script src="app/themes/temp/js/init.js"></script>
	</body>
</html>