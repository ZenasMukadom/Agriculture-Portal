<?php 
session_start();

ini_set('memory_limit', '-1');
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


$flag=0;
$temp=0;
$crop=$_POST['crops']; //crop name;
$quantity=$_POST['trade_farmer_cropquantity']; //quantity

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

if($flag==1){
if($quantity>$temp)
$flag=0;
else $flag=1;
}




$query="SELECT msp from farmer_crops_trade where Trade_crop='$crop'";
$result = mysqli_query($conn, $query);
$row = $result->fetch_assoc();
$x=$row["msp"]*$quantity; //total price

$query3="SELECT trade_id from farmer_crops_trade where Trade_crop='$crop'";
$result3=mysqli_query($conn,$query3);
$row2 = $result3->fetch_assoc();
$TradeId=$row2["trade_id"]; //total price



//Add to Cart Fuctionality

if(isset($_POST["add_to_cart"]))
{
    
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
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
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
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


<link href="css/simple_cart.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.3.1.min.js"

        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
        crossorigin="anonymous"></script>

	
    	<style type="text/css">
        .containercart {
            margin-top: 100px;
        }

        .card {
            width: 300px;
        }

        .card:hover {
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -ms-transform: scale(1.05);
            -o-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .list-group-item {
            border: 0px;
            padding: 5px;
        }

        .price {
            font-size: 72px;
        }

        .currency {
            position: relative;
            font-size: 25px;
            top: -31px;
        }
    </style>



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


	<div class="header-banner" style="min-height:100px">
		<div class="container">
			
			<div class="banner-info text-center">
				<h1><a href="buy_crops.php">Buy Crops</a></h1>
			</div>

			

		</div>
	</div>
	<!-- header-section-ends -->                              

                <table class="table table-striped table-bordered table-responsive-md btn-table">

                    <thead>
                    <tr>
					
                        <th>Available</th>
                        <th>Price</th>
						
                    </tr>
                    </thead>

                    <tbody>
					
                    <tr>
						<td>
						<?php if($flag==1) echo "Yes"; else echo "No";?>
                        
						</td>


                        <td>
                        <i class='fa fa-inr'></i>&nbsp<?php if($flag==1) echo $x;?>
						
						</td>


						<td>
                        <form method="POST" action="price.php?action=add&id=<?php echo $TradeId ?>">
                            <input name="hidden_name" value="<?php echo $crop ?>">
                            <input name="hidden_price" value="<?php echo $quantity ?>">
                            <input name="quantity" value="<?php echo $x ?>">
                            <button class="sc-add-to-cart"
                            <?php if ($flag == '0'){ ?> disabled <?php   } ?>
                            name="add_to_cart" type="submit">
                            Add To Cart
                            </button>
                        </form>

						</td>


						<td>
						<button class="sc-buy"
						<?php if ($flag == '0'){ ?> disabled <?php   } ?>
        				type="submit">
        				Buy
						</button>
						</td>

						</tbody>

                        </table> 
						

						
				




		
<!-- 

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p id="demo"></p>

<div class="containercart">
    <?php
        require_once "StripePayment/config.php";
    
        foreach ($products as $productID => $attributes) {
                        echo '
                            <br>
                            <form action="stripeIPN.php?id='.$productID.'" method="POST">
                              <script 
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="'.$stripeDetails['publishableKey'].'"
                                data-amount="5000"
                                data-currency="inr"
                                data-name="Agriculture Payment Portal"
                                data-description="Payment"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-label="Buy Now"
                                data-locale="auto">
                              </script>
                            </form>
            ';
        }
    ?>
</div>
						
-->

					
						

</body>
</html>