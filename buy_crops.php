<?php 
ini_set('memory_limit', '-1');
session_start();
						
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


		if(isset($_POST["add_to_cart"]))
		{
			if(isset($_SESSION["shopping_cart"]))
			{
				$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
				if(!in_array($_GET["id"], $item_array_id))
				{
				
					$item_array = array(
						'item_id'			=>	$_GET["id"],
						'item_name'			=>	$_POST["hidden_name"],
						'item_price'		=>	$_POST["hidden_price"],
						'item_quantity'		=>	$_POST["quantity"]
					);
					array_push($_SESSION['shopping_cart'], $item_array);
				}
				else
				{
					echo '<script>alert("Item Already Added")</script>';
				}
			}
			else
			{
				$item_array = array(
					'item_id'			=>	$_GET["id"],
					'item_name'			=>	$_POST["hidden_name"],
					'item_price'		=>	$_POST["hidden_price"],
					'item_quantity'		=>	$_POST["quantity"]
				);
				$_SESSION["shopping_cart"][0] = $item_array;
			}
		}

		if(isset($_GET["action"]))
		{
			if($_GET["action"] == "delete")
			{
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
					if($values["item_id"] == $_GET["id"])
					{
						unset($_SESSION["shopping_cart"][$keys]);
						$b=$_GET["id"];
						
						$query5="SELECT Trade_crop from farmer_crops_trade where trade_id= $b";
						$result5 = mysqli_query($conn, $query5);
						$row5 = $result5->fetch_assoc(); 
						$a=$row5["Trade_crop"];
						
						
						$query6="DELETE FROM `cart` WHERE `cropname` = '".$a."'";
						$result6 = mysqli_query($conn, $query6); 

						echo '<script>alert("Item Removed")</script>';
						echo '<script>window.location="buy_crops.php"</script>';
		

					     
						
					}
				}
			}
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
				<h1><a href="buy_crops.php">Buy Crops</a></h1>
			</div>

			

		</div>
	</div>
	<!-- header-section-ends -->    


				                                           
	                                          
	                                         

                <table class="table table-striped table-bordered table-responsive-md btn-table">

				<form role="form"  id="buycrops"  method="POST" enctype="multipart/form-data">   

                    <thead>
                    <tr>
					
                        <th>#</th>
                        <th>Crop Name</th>
                        <th>Quantity (in KG)</th>
						<th>Check availability and price</th>
						<th>Available</th>
                        <th>Price (in Rs.)</th>
						
						
						
						
						
                    </tr>
                    </thead>

                    <tbody>
					
                    <tr>
                        <th scope="row">1</th>
                        <td>
                        <div class="form-group col-md-4 col-xs-4">
						<select id="crops" name="crops">
  							<option value="arhar">Arhar</option>
							<option value="bajra">Bajra</option>  
							<option value="barley">Barley</option>
							<option value="cotton">Cotton</option>	
							<option value="gram">Gram</option>
							<option value="jowar">Jowar</option>
							<option value="jute">Jute</option>
							<option value="lentil">Lentil</option>
							<option value="maize">Maize</option>
							<option value="moong">Moong</option>
							<option value="ragi">Ragi</option>
  							<option value="rice">Rice</option>
							<option value="soyabean">Soyabean</option>
							<option value="urad">Urad</option>
							<option value="wheat">Wheat</option>
						</select>
					
						</div>
						
						</td>
                        <td>
						
                        <div class="form-group col-md-4 col-xs-2">
						
                        <input type="number"  name="trade_farmer_cropquantity"  class="form-control required">
						
                        </div>
						
						</td>
						<td>
						
						<button type="submit" name="calculate" value="calculate" class="btn btn-submit">Check</button>
						

						

						</td>

						</form>


						<?php
						
						$flag=0;
						if(isset($_POST ['calculate'])){
							
						$temp=0;
						$crop=$_POST['crops'];
						$quantity=$_POST['trade_farmer_cropquantity'];

						$query1="SELECT Trade_crop from farmer_crops_trade";
						$result1 = mysqli_query($conn, $query1);
						while($row1 = $result1->fetch_assoc()) {
						if(!strcasecmp($crop,$row1["Trade_crop"])){
    						$flag=1;
    						break;
						}
	
						}

						$query2="SELECT Crop_quantity from farmer_crops_trade where Trade_crop='$crop'";
						$result2 = mysqli_query($conn, $query2);
						while($row2 = $result2->fetch_assoc()) {
						$temp+=$row2["Crop_quantity"];
						}

						$query8="SELECT quantity from cart where cropname='".$crop."'";
						$result8 = mysqli_query($conn, $query8);
						$row8 = $result8->fetch_assoc();
						$temp -= $row8['quantity'];

						if($flag==1){
						if($quantity>$temp)
						$flag=0;
						else $flag=1;
						}




						$query="SELECT msp from farmer_crops_trade where Trade_crop='$crop'";
						$result = mysqli_query($conn, $query);
						$row = $result->fetch_assoc();
						$x=$row["msp"]*$quantity;


						$query3="SELECT trade_id from farmer_crops_trade where Trade_crop='$crop'";
						$result3=mysqli_query($conn,$query3);
						$row2 = $result3->fetch_assoc();
						$TradeId=$row2["trade_id"]; //trade id

						


						}

                        
						?>

						

						<td>
						<?php
						if(isset($_POST ['calculate'])){
						 if($flag==1){ echo "Yes"; 

						
						}
							
						 else echo "No";
						 
						}
						 ?>
                        
						</td>

						<td>
                        Rs.&nbsp<?php if($flag==1) echo $x;?>
						
						</td>

						<td>
						<form method="POST" action="buy_crops.php?action=add&id=<?php echo $TradeId ?>">
                            <input hidden name="hidden_name"  value="<?php echo $crop ?>">
							<input hidden name="hidden_price" value="<?php echo $x ?>">
                            <input hidden name="quantity" value="<?php echo $quantity ?>">
    
                            <button class="sc-add-to-cart"
                            <?php if ($flag == '0'){ ?> disabled <?php   } ?>
                            name="add_to_cart" type="submit">
                            Add To Cart
                            </button>
                        </form>

						</td>

						<?php
						if(isset($_POST ['add_to_cart'])){
							$crop=$_POST['hidden_name'];
							$quantity=$_POST['quantity'];
							$price=$_POST['hidden_price'];
							$query4="INSERT INTO `cart`(`cropname`, `quantity`, `price`) 
  							VALUES ('$crop','$quantity','$price');";
  							$result4 = mysqli_query($conn, $query4);
						}

						?>

						


					

						</tbody>

                        </table> 

						<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity (in KG)</th>
						<th width="20%">Price (in Rs.)</th>
					
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo ucfirst($values["item_name"]); ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>Rs. <?php echo $values["item_price"]; ?> </td>
				
						<td><a href="buy_crops.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					
					</tr>

					<?php
							$total = $total +  $values["item_price"];
							$_SESSION['Total_Cart_Price']=$total;
						}
					?>
					<tr>
						<td colspan="2" align="right">Total</td>
						<td align="right">Rs. <?php echo number_format($total,2); ?></td>

						<td>
						
						<?php
							require_once "StripePayment/config.php";
						
							foreach ($products as $productID => $attributes) {
								$TotalCartPrice=$_SESSION['Total_Cart_Price']*100;
											echo '
												<br>
												<form action="StripePayment/stripeIPN.php?id='.$productID.'" method="POST">
												<script 
													src="https://checkout.stripe.com/checkout.js" class="stripe-button"
													data-key="'.$stripeDetails['publishableKey'].'"
													data-amount="'.$TotalCartPrice.'"
													data-currency="inr"
													data-name="Agriculture Payment Portal"
													data-description="Crop Payment"
													data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
													data-label="Buy Now"
													data-locale="auto">
												</script>
												</form>
								';
							}
    					?>
							
						
						</td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>



			

						
						




					
						
					


					

						
                        



						
                        

                    
                    
                    

				
					
                
				
             
	
	
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