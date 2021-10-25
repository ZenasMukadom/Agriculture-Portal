<?php
session_start();
ini_set('memory_limit', '-1');
$userlogin=$_SESSION['farmer_login_user'];
$servername="localhost";
$username="root";
$password="";
$dbname="agriculture_portal";


//Create Connection 
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Agriculture Portal </title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>



<!--Notify-->
<link href="css/pnotify.css" rel="stylesheet">
<link href="css/pnotify.brighttheme.css" rel="stylesheet">
<script src="js/pnotify.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gardening Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
	<!-- header-section-starts -->
	<div class="header-banner">
		<div class="container">
			
			<div class="header-top">
				<div class="social-icons">
					
					
					<div id="google_translate_element" ></div>
					
					<script type="text/javascript" >
					function googleTranslateElementInit() {
						new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,gu,hi,kn,mr,ta,te'}, 'google_translate_element');
					}
					</script>
				
				</div>
				
				
			<span class="menu"><img src="images/nav.png" alt=""/></span>
				<div class="top-menu">
					<ul>
					<nav class="cl-effect-13">
						<li><a href="farmer_index.php">Home</a></li>
						<li><a href="php/logout.php">Logout</a></li>
					</nav>
					</ul>
				</div>


				
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( ".top-menu ul" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
				
				<div class="clearfix"></div>
			</div>
			
			<div class="banner-info text-center">
				<h1><a href="farmer_index.php">Agriculture</a></h1>
			</div>
			
			
			

					<!--Main Agriculture Components Starts-->
					<div class="header-grids   text-center">
						<div class="header-bottom-grid1 col-md-offset-1 ">
							<span class="glyphicon glyphicon-user"></span>					
							<h4><a href="myprofile.php" style="color:white;">My Profile</a></h4>
						</div>
						
						<div class="header-bottom-grid2">
							<span class="glyphicon glyphicon-leaf"></span>
							<h4><a href="crop_predict.php" style="color:white;">Crops</a></h4>
						</div>
						
						<div class="header-bottom-grid3">
							<span class="glyphicon glyphicon-cloud"></span>
							<h4><a href="upcomimg days.php" style="color:white;">Weather Prediction </a></h4>
						</div>
						
					</div>
			

					<div class="header-bottom-grids text-center">
					
						<div class="header-bottom-grid1 col-md-offset-1">
							<span class="glyphicon glyphicon-grain"></span>
							<h4><a href="tradecrops.php" style="color:white;">Trade Crops</a></h4>
						</div>
						
						<div class="header-bottom-grid2 ">
							<span class="glyphicon glyphicon-list-alt"></span>
							<h4><a href="newsfeed.php" style="color:white;">News Feed</a></h4>
						</div>

						<div class="header-bottom-grid3">
							<span class="glyphicon glyphicon-time"></span>
							<h4><a href="farmer_history.php" style="color:white;">Selling History</a></h4>
						</div>


						<div class="clearfix"></div>
					</div>
					<!--Main Agriculture Components Ends-->
		

		</div>
	</div>

	<!-- header-section-ends -->
	<!-- content-section-starts -->

	<!-- content-section-ends -->
	
			<!-- testimonials -->

	<!-- //testimonials -->
	
	
	<!-- footer-section -->
	<div class="footer">
		<div class="container">
			<div class="copyright text-center">
				<p>&copy; 2020 Agriculture Portal. All rights reserved | Design by NHZP  </a></p>
			</div>
		</div>
	</div>
	<!-- footer-section -->
	<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!--Google translate--> 
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>