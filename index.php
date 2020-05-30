
<html lang="en">
<head>
    <title>Agricultural Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mdb.min.css">
    <script src="js/index.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
    
    
</head>

<body style="margin-top: 55px">
    <center>
        <!--<h1 style="font-weight: 900;"><b><i><font color="#1c2a48">Kisaan Seva Portal</font></i></b></h1>-->
        <div class="container mb-5 mt-5">
            <div class="card-deck" style="width:520px">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded mr-5 ">
                    <div class="card-body text-center" style="height:500px">
                        <ul class="nav nav-pills pl-2 pr-1 mb-3" id="pills-tab" role="tablist" >
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-farmer-tab"  data-toggle="pill" style="width:122px" href="#pills-farmer" role="tab"
                                aria-controls="pills-farmer" aria-selected="true">Farmer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-customer-tab" data-toggle="pill" style="width:122px" href="#pills-customer" role="tab"
                                aria-controls="pills-customer" aria-selected="false">Customer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-government-tab" data-toggle="pill" style="width:122px" href="#pills-government" role="tab"
                                aria-controls="pills-government" aria-selected="false">Government</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-farmer" role="tabpanel" aria-labelledby="pills-farmer-tab">
                               
                                <form onsubmit="return validateFarmer()" method="POST" class="text-center border border-light p-5" style="height:350px" action="php/login.php">
                                    
                                    <p class="h4 mb-4">Sign in</p>
    
       
                                    <input type="text" id="EmailId" class="form-control mb-4" placeholder="Email ID" name="farmer_email">
                                    
    
                                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="farmer_password">
    
        
    
        
                                    <button class="btn btn-info btn-block my-4" type="submit" name="farmerlogin">Sign in</button>
    
        
                                    <p>Not a member?
                                    <a href="php/farmer_regist.php" style="color: #AA9A6E;">Register</a>
                                    </p>
                                    

    
                                </form>
    
                            </div>
                            <div class="tab-pane fade" id="pills-customer" role="tabpanel" aria-labelledby="pills-customer-tab">
                                <form onsubmit="return validateCustomer()" class="text-center border border-light p-5" action="php/login.php" method="POST">

                                    <p class="h4 mb-4">Sign in</p>
                                        
                                           
                                    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Email ID" name="cust_email">
                                        
                                            
                                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="cust_password">
                                        
                                            
                                        
                                            
                                    <button class="btn btn-info btn-block my-4" type="submit" name="customerlogin">Sign in</button>
                                        
                                            
                                    <p>Not a member?
                                        <a href="php/user_register.php" style="color: #AA9A6E;">Register</a>
                                    </p>
                                        
                                            
                                        
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-government" role="tabpanel" aria-labelledby="pills-government-tab">
                                <form class="text-center border border-light p-5" action="php/login.php" method="POST">

                                    <p class="h4 mb-4">Sign in</p>
                                                
                                                   
                                    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Username" name="gov_username">
                                                
                                                    
                                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="gov_password">
                                                
                                                    
                                                
                                                    
                                    <button class="btn btn-info btn-block my-4" name="Govlogin" type="submit">Sign in</button>
                                </form>    
                            </div>
                        <div>     
                    </div>
                </div>
            </div>
            <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,gu,hi,kn,mr,ta,te'}, 'google_translate_element');
}
</script>
        </div>
    </center>

<script>
function send_otp()
{
    var email=jQuery('#EmailId').val();
    jQuery.ajax({
        url:'send_otp.php',
        type:'post',
        data:'email='+email,
        success:function(result){

        }
    })
}


</script>

</body>
</html>