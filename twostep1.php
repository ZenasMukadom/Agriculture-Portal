
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
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
    
   
    
    
</head>

<body style="margin-top: 55px">
    <center>
        <!--<h1 style="font-weight: 900;"><b><i><font color="#1c2a48">Kisaan Seva Portal</font></i></b></h1>-->
        <div class="container mb-5 mt-5">
            <div class="card-deck" style="width:520px">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded mr-5 ">
                    <div class="card-body text-center" style="height:500px">
                        <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                               
                                <form method="POST" class="text-center border border-light p-5" style="height:350px" action="php/login.php">
                                    <p class="h4 mb-4">Two factor verification</p>
                                    <button class="btn btn-info btn-block my-4 first_box" type="button" name="customerlogin" onclick="send_otp()">Send OTP</button>
                                    <div>
                                    <input type="text" id="otp" id="EmailId" class="form-control mb-4 second_box" placeholder="Enter OTP" name="customer_otp">
                                    <span id="otp_error" class="field_error"></span>
                                    </div>
                                    <button class="btn btn-info btn-block my-4 second_box" type="button" name="customerlogin" onclick="submit_otp()">Sign In</button>
                                    

                                </form>
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
        url:'send_otp1.php',
        type:'post',
        data:'email='+email,
        success:function(result){
            if(result=='yes'){
				jQuery('.second_box').show();
				jQuery('.first_box').hide();
			}
        }
    })
}

function submit_otp(){
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:'check_otp1.php',
		type:'post',
		data:'otp='+otp,
		success:function(result){
			if(result=='yes'){
				window.location='customer_index.php';
			}
			if(result=='not_exist'){
				jQuery('#otp_error').html('Please enter valid OTP');
			}
		}
	});
}
</script>
<style>
.second_box{display:none;}
#otp_error{color:red;}
</style>
</body>
</html>