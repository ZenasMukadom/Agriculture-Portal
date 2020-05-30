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

<!--Myprofile Css-->
<link rel="stylesheet" href="css/myprofilecss.css">

<!--MyProfile Checkbox CSS-->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/build.css">

<!--Myprofile Photo upload Css-->
<link rel="stylesheet" href="css/myprofileupload.css">

<!--Bootstrap-->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />


<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>

<!--Js for Crop Prediction through Location State and District-->
<script src="js/crop_predict_location.js"></script>
  

<!--Js for Validation of form -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

<!--Js for signupform-->
<script src="js/validateform.js"></script>



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

<!--Notify-->
<link href="css/pnotify.css" rel="stylesheet">
<link href="css/pnotify.brighttheme.css" rel="stylesheet">
<script src="js/pnotify.js"></script>


</head>
<body>

	<!-- header-section-starts -->
	<div class="header-banner" style="min-height:220px">
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
				<h1><a href="crop_predict.php">Crop Predictor</a></h1>
			</div>
		</div>
	</div>
    <!-- header-section-ends -->

    <div class="services">
        <div class="row">
			<div class="container-fluid">
				
                    <!-- Form Wizard -->
                    <form role="form" action="#" method="post" enctype="multipart/form-data">                                            

                        <table class="table table-striped  table-responsive-md btn-table">

                            <thead>
                            <tr>
                                <th></th>
                                <th>State Name</th>
                                <th>District Name</th>
                                <th>Season Name</th>
                                <th>Upload</th>
                            </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">1</th>

                                    <td>
                                    	<div class="form-group col-md-10 col-xs-10">
											<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
											<script language="javascript">print_state("sts");</script>
											
										</div>
                                    </td>

									<td>
										<div class="form-group col-md-10 col-xs-10">
											<select id ="state" name="district" class="form-control" required></select>
											<script language="javascript">print_state("sts");</script>
										</div>
                                    </td>
									<td>
										<div class="form-group col-md-10 col-xs-10">
									
													<select name="Season" class="form-control">
													<option value="">Select Season ...</option>
													<option name="Kharif" value="Kharif">Kharif</option>
													<option name="Whole Year" value="Whole Year">Whole Year</option>
													<option name="Autumn" value="Autumn">Autumn</option>
													<option name="Rabi" value="Rabi">Rabi</option>
													<option name="Summer" value="Summer">Summer</option>
													<option name="Winter" value="Winter">Winter</option>
												
													</select>
										</div>

									</td>

									<td>
                                    <center>
										<div class="form-group col-md-10 col-xs-10">
											<button type="submit" name="Crop_Predict" class="btn btn-success btn-submit">Predict</button>
										</div>
                                    
                                    </center>
                                    </td>

                                </tr>
                            </tbody>

                        </table> 
                    </form>
                
            </div>
        </div>
    </div>

    <div class="services">

		<h2>Crops Predicted  :</h2>
        <div class="row">
			<div class="container-fluid">
					<h3>
					<?php 
					if(isset($_POST['Crop_Predict'])){


					$state=trim($_POST['stt']);
					$district=trim($_POST['district']);
					$season=trim($_POST['Season']);

					echo "Crops grown in ".$district." during the ".$season." season are :- ";

                   # $state = 'Bihar';
                   # $district='KAIMUR (BHABUA)';
				   # $season='Rabi';

					$JsonState=json_encode($state);
					$JsonDistrict=json_encode($district);
					$JsonSeason=json_encode($season);
					
                    $command = escapeshellcmd("C:/Users/Zenas/AppData/Local/Programs/Python/Python37-32/python MLdecisiontree\ZDecision_Tree_Model_Call.py $JsonState $JsonDistrict $JsonSeason");
                    $output = shell_exec($command);
					echo $output;
					
					}
                    ?>
					</h3>
            </div>
        </div>
    </div>





    
	<!-- footer-section -->
	<div class="footer" style="position:absolute;width:100%; bottom:0;">
		<div class="container">
			<div class="copyright text-center">
				<p>&copy; 2020 Agricutlure Portal. All rights reserved | Design by NHZP </a></p>
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