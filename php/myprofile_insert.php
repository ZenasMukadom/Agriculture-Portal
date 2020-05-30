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

if(isset($_POST['profile_submit'])){

    //Form step 1:
    $f_gender=$_POST['Gender'];
    $f_gender=encrypt($f_gender,$pk);
    $f_bday=$_POST['bday'];
    $f_bday=encrypt($f_bday,$pk);
    $f_state=$_POST['stt'];
    $f_state=encrypt($f_state,$pk);
    $f_district=$_POST['district'];
    $f_district=encrypt($f_district,$pk);
    $f_location=$_POST['Address_name'];
    $f_location=encrypt($f_location,$pk);

    //Form step 3:
   // $f_aadhar=$_POST['Aadhaar_no'];
 //   $f_photo_id_file=$_POST['photo_id'];


    //File Upload :
    //Aadhar Card Upload
    $f_aadhar_name=$_FILES['aadhar_file']['name'];
    $f_aadhar_type=$_FILES['aadhar_file']['type'];
    $f_aadhar_size=$_FILES['aadhar_file']['size'];
  //  $f_aadhar_temp=$_FILES['aadhar_file']['temp_name'];

    if (file_exists("upload/" . $_FILES["aadhar_file"]["name"]))
		{
			echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...");</script>';
        }
    else{
            move_uploaded_file($_FILES["aadhar_file"]["tmp_name"],"upload/" . $_FILES["aadhar_file"]["name"]);
            $aadhar_uploadquery="UPDATE farmerlogin SET F_AadharNo_file='$f_aadhar_name' WHERE email='$userlogin'"; 
            $run_aadhar_uploadquery=mysqli_query($conn,$aadhar_uploadquery);
        }
    
    
    //Photo ID Upload
    $f_photoid_name=$_FILES['photoid_file']['name'];
    $f_photoid_type=$_FILES['photoid_file']['type'];
    $f_photoid_size=$_FILES['photoid_file']['size'];
   // $f_photoid_temp=$_FILES['photoid_file']['temp_name'];
  
    move_uploaded_file($_FILES["photoid_file"]["tmp_name"],"upload/" . $_FILES["photoid_file"]["name"]);
    $photoid_uploadquery="UPDATE farmerlogin SET F_Photo_Id_file='$f_photoid_name' WHERE email='$userlogin'";



    //Query :
    $insertquery="UPDATE farmerlogin SET  F_gender='$f_gender', F_birthday='$f_bday', F_State='$f_state', 
    F_District='$f_district', F_Location='$f_location' WHERE email='".$userlogin."' ";
    
    $run_insertquery=mysqli_query($conn,$insertquery);
   
    $run_photoid_uploadquery=mysqli_query($conn,$photoid_uploadquery);




    echo "<script>
            alert('Profile Submitted');
            window.location.href='../myprofile.php';
            </script>";
   
   // header("location:../myprofile.php?");


}





?>