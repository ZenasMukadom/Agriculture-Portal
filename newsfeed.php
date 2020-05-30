<!DOCTYPE html>
<html lang="en">
<head>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>

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

    
<style>
.jumbotron{
    background-color: #153449;   
}
.jumbotron h1, h4{
    color: white;   
}
body{
    background-color:whitesmoke;
}
.imgclass{
	width:calc(100% - 20px);
    height: 250px;
    margin: 10px;

}

.newsgrid{
    margin: 10px;
    border: 1px solid lightgray;
    padding: 10px;
}
.container-fluid{
    width: 90%;
}
</style>
</head>
<body>
    
    <!-- header-section-starts -->
	<div class="header-banner" style="min-height:210px">
		<div class="container">
			
			<div class="header-top">
				<div class="social-icons">
                <div id="google_translate_element"></div>
					
					<script type="text/javascript" >
					function googleTranslateElementInit() {
						new google.translate.TranslateElement({pageLanguage: 'en' , includedLanguages: 'bn,en,gu,hi,kn,mr,ta,te'}, 'google_translate_element');
					}
					</script>
					
				</div>
				
			<span class="menu"><img class="imgclass" src="images/nav.png" alt=""/></span>
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
				<h1><a href="newsfeed.php">News Feed</a></h1>
			</div>

			

		</div>
	</div>
	<!-- header-section-ends -->
    

    <?php
      //  $url='http://newsapi.org/v2/everything?country=in&apiKey=7f1acd4f4d344efe9d732df03ab86c97';
        $url='http://newsapi.org/v2/everything?q=farmers&apiKey=YourAPIKEY';   //Your API KEY
        $response=file_get_contents($url);
        $newsdata= json_decode($response);

    ?>
    <div class="container-fluid">
        <?php
            foreach($newsdata->articles as $news)
            {
        ?>
        <div class="row newsgrid">
            <div class="col-md-3">
                    <img class="imgclass" src="<?php echo $news->urlToImage ?>" alt="News thumbnail" class="rounded"> 
            </div>
            <div class="col-md-9">
                <h2>Title: <?php echo $news->title ?></h2>
                <h5>Description:<?php echo $news->description ?> </h5>
                <h5>Link:<?php echo "<a href=$news->url>$news->title</a>" ?> </h5>
                <p>Content: <?php echo $news->content ?> </p>
                <h6>Author:<?php echo $news->author ?> </h6>
                <h6>Published: <?php echo $news->publishedAt ?></h6>
            </div>
        </div>
        <?php
             }
        ?>   
    </div>

    <!-- Footer Starts -->
   <!-- footer-section -->
	<div class="footer">
		<div class="container">
			<div class="copyright text-center">
				<p>&copy; 2020 Agricutlure Portal. All rights reserved | Design by NHZP  </a></p>
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