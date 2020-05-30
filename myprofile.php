<?php 
ini_set('memory_limit', '-1');
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

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>

<!--Js for Progress form for Profile-->
<script src="js/myprofilejs.js"></script>
  
<!--Js for File upload for Profile-->
<script scr="js/myprofileupload.js"></script>

<!--Js for Validation of form -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

<!--Js for signupform-->
<script src="js/validateform.js"></script>

<!--Notify-->
<link href="misc/pnotify.css" rel="stylesheet">
<link href="misc/pnotify.brighttheme.css" rel="stylesheet">



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

<!-- Pnotify -->
<link href="css/pnotify.css" rel="stylesheet">
<link href="css/pnotify.brighttheme.css" rel="stylesheet">
<script src="js/pnotify.js"></script>

<!--
	<script src="js/farmerprofile.js"></script>
-->

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
				<h1><a href="myprofile.php">My Profile</a></h1>
			</div>

			

		</div>
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="services">
		
		
			  <!--Profile form starts-->
			  <Style>.form-wizard label { font-weight: 600; font-family: 'Oswald', sans-serif; }</style>
						
									 
						<div class="row">
							
							<div class="container-fluid">
							
							<div class="col-sm-10 col-md-8  col-lg-12  form-wizard">
							
								<!-- Form Wizard -->
								<form role="form" id="signupForm" action="php/myprofile_insert.php" method="post" enctype="multipart/form-data">

									<h3>Application Enrollment Form for Farmer </h3>
									<p>Fill all form field and Submit</p>
									
									<!-- Form progress -->
									<div class="form-wizard-steps form-wizard-tolal-steps-1">
										<div class="form-wizard-progress">
											<div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
										</div>
										<!-- Step 1 -->
										<div class="form-wizard-step active">
											<div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
											<p>Applicant Details</p>
										</div>
										<!-- Step 1 -->
										
								
										
									</div>
									<!-- Form progress -->
									
					
									<!-- Form Step 1 -->
									<fieldset>

									

										<h3>Applicant Details: </h3>


										<div>
											<section>
												Personal Details:
											</section>
										</div>
										  
										<br>
										<div class="container-fluid">
											<div class="row"> 
												

												<div class="form-group col-md-4 col-xs-4">
													<label>Gender : </label><br>
													<input type="radio" name="Gender" value="Male" checked="checked"> Male
													<input type="radio" name="Gender" value="Female"> Female
												</div>

												<div class="form-group col-md-4 col-xs-4">
													<label>Birthday: <span>*</span></label><br>
													<input type="date" name="bday" class="form-control required">
												</div>
		
											</div>
										</div>
										  
										<br>
					
										
										<hr>

										<div>
											<section>
												Address Details:
											</section>
										</div>
										  
										<br>
										<div class="container-fluid">
											  <div class="row">

												<div class="form-group col-md-4 col-xs-4">
													<label>State : <span>*</span></label><br>
													<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
													<script language="javascript">print_state("sts");</script>
												</div>

												<div class="form-group col-md-4 col-xs-4">
													<label>District : <span>*</span></label><br>
													<select id ="state" name="district" class="form-control" required></select>
													<script language="javascript">print_state("sts");</script>
												</div>

												<div class="form-group col-md-4 col-xs-4">
													<label>Address : <span>*</span></label>
													<input type="text" name="Address_name" placeholder="Address" class="form-control required">
												</div>

											</div>
										</div>

										<hr>

										<div>
											<section>
												Document Details:
											</section>
										</div>
										  
										<br>
										<div class="container-fluid">
											<div class="row">

												<div class="form-group col-xs-12 col-md-4 col-sm-4">
														<label>Upload Photo  Copy <span>*</span></label>
														<div class="input-group">
															
														<input type='file' name="photoid_file" onchange="readURL(this);"/>
															<img id="blah" src="http://placehold.it/180" alt="your image" />
														</div>
													</div>
												


												<div class="form-group col-xs-12 col-md-4 col-sm-8 col-sm-offset-2">
												<label>Upload Aadhaar Card Copy <span>*</span></label>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
														</div>
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="inputGroupFile01"
															aria-describedby="inputGroupFileAddon01" name="aadhar_file">
															<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
														</div>
													</div>
												</div>

											</div>


										<br>
											

										<div class="form-wizard-buttons">
											<button type="submit" name="profile_submit"
											 class="btn btn-submit">Submit</button>
										</div>
									</fieldset>
									<!-- Form Step 1 -->
								
								</form>
								<!-- Form Wizard -->
								<script>
								$("commentform").validate();
								</script>
							</div>
							</div>	<!--Container close-->
						</div>
			  <!--Profile form ends-->
		</div>
	</div>


	

	
	<!-- footer-section -->
	<div class="footer">
		<div class="container">
			<div class="copyright text-center">
				<p>&copy; 2020 Agriculture Portal. All rights reserved | Design by NHZP </a></p>
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