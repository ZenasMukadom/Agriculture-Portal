<?php
session_start();
date_default_timezone_set("Asia/Calcutta"); 
$userlogin=$_SESSION['customer_login_user'];
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

function encrypt($message, $encryption_key){
   $key = hex2bin($encryption_key);
   $nonceSize = openssl_cipher_iv_length('aes-256-ctr');
   $nonce = openssl_random_pseudo_bytes($nonceSize);
   $ciphertext = openssl_encrypt(
     $message, 
     'aes-256-ctr', 
     $key,
     OPENSSL_RAW_DATA,
     $nonce
   );
   return base64_encode($nonce.$ciphertext);
 }
 function decrypt($message,$encryption_key){
   $key = hex2bin($encryption_key);
   $message = base64_decode($message);
   $nonceSize = openssl_cipher_iv_length('aes-256-ctr');
   $nonce = mb_substr($message, 0, $nonceSize, '8bit');
   $ciphertext = mb_substr($message, $nonceSize, null, '8bit');
   $plaintext= openssl_decrypt(
     $ciphertext, 
     'aes-256-ctr', 
     $key,
     OPENSSL_RAW_DATA,
     $nonce
   );
   return $plaintext;
 }

$pk="1a851867be761f7725cacf7467a184d3";

//Cart Details Query
$Cartquery="SELECT * from cart";
$cartresult=mysqli_query($conn,$Cartquery);


//Customer Details Query
$customerquery="SELECT * from custlogin where email='".$userlogin."'";
$customerresult=mysqli_query($conn,$customerquery);


$row=mysqli_fetch_array($customerresult);
$Customername=$row['cust_name'];
$Customername=decrypt($Customername,$pk);
$CustomerAddress = $row['address'];
$CustomerAddress=decrypt($CustomerAddress,$pk);
$CustomerCity= $row['city'];
$CustomerCity=decrypt($CustomerCity,$pk);
$CustomerPincode=$row['pincode'];
$CustomerPincode=decrypt($CustomerPincode,$pk);
$CustomerState=$row['state'];
$CustomerState=decrypt($CustomerState,$pk);
$CustomerPhone=$row['phone_no'];
$CustomerPhone=decrypt($CustomerPhone,$pk);
$CustomerEmail=$row['email'];


#Update Queries for Production approx and Farmer_trade_crops


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Transaction Page </title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/invoice.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

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



<script>
$(function(){
             new PNotify({
             title: 'Order has been Placed',
             type: 'success'
             });
});


</script>



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
						<li><a href="customer_index.php">Home</a></li>
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
				<h1><a href="customer_money_transfered.php">Transaction</a></h1>
			</div>

			

		</div>
	</div>
	<!-- header-section-ends -->
    

    <!-- INVOICE Table Starts-->
   
<div class="container">
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
            Agriculture Portal 
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
            <div class="invoice-to">
               <small>to</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse"><?php echo $Customername;?></strong><br>
                  <?php echo $CustomerAddress;?><br>
                  <?php echo $CustomerCity;?>, <?php echo $CustomerPincode;?><br>
                  Phone: <?php echo $CustomerPhone;?><br>
               </address>
            </div>
            <div class="invoice-date">
               <small>Invoice </small>
               <div class="date text-inverse m-t-5"><?php echo $date = date('d/m/Y'); ?></div>
               <div class="date text-inverse m-t-5"><?php echo $date = date('H:i:s'); ?></div>
               <div class="invoice-detail">
                  #0000123DSS<br>
               </div>
            </div>
         </div>
         <!-- end invoice-header -->
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th>Product Name</th>
                        <th class="text-center" width="10%">Quantity</th>
                        <th class="text-center" width="10%">Price</th>
                     
                     </tr>
                  </thead>
                  <tbody>

                    <?php
                        while($rows=mysqli_fetch_assoc($cartresult))
                        {
                    ?>

                            <tr>
                                <td class="text-inverse"><?php echo ucfirst($rows['cropname']); ?></td>
                                <td class="text-center"><?php echo $rows['quantity']; ?></td>
                                <td class="text-center"><?php echo $rows['price']; ?></td>
                            </tr>
                    <?php
                        }
                     ?>
                  

                  </tbody>
               </table>
            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
               <div class="invoice-price-left">
                  <div class="invoice-price-row">
                     <p>Amount Paid</p>
                  </div>
               </div>
               <div class="invoice-price-right">
                  <small>TOTAL</small> <span class="f-w-600">Rs.&nbsp<?php echo $_SESSION['Total_Cart_Price']; ?></span>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
     
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               THANK YOU FOR YOUR BUSINESS
            </p>
         </div>
        
         <!-- end invoice-footer -->
      </div>
   </div>
</div>
    <!-- INVOICE Table Ends-->


   
<br>
<br>




    <!-- Footer Starts -->
   <!-- footer-section -->
	<div class="footer" style="position:absolute;width:100%; bottom:0;">
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