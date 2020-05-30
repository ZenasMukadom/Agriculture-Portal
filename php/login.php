<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="agriculture_portal";
$conn = mysqli_connect($servername, $username, $password, $dbname);

//echo("connection");
if(isset($_POST ['farmerlogin'])) {
  $farmer_email=$_POST['farmer_email'];
  $farmer_password=$_POST['farmer_password'];
  $farmer_password=SHA1($farmer_password);


  $farmerquery = "SELECT * from `farmerlogin` where email='".$farmer_email."' and password='".$farmer_password."' ";
  $result = mysqli_query($conn, $farmerquery);
  $rowcount=mysqli_num_rows($result);
  if ($rowcount==true) {
    $_SESSION['farmer_login_user']=$farmer_email; // Initializing Session
    

    header("location: ../twostep.php"); // Redirecting To Other Page
    } 
    else {
    echo "<script language='javascript'>alert('Username or Password is invalid');</script>"; 
    }
    
    
}


if(isset($_POST ['customerlogin'])) {

    $customer_email=$_POST['cust_email'];
    $pass=$_POST['cust_password'];
    $customer_password=SHA1($pass);

    $checkquery = "SELECT * from `custlogin` where email='".$customer_email."' and password='".$customer_password."' ";
    $result = mysqli_query($conn, $checkquery);
    $rowcount=mysqli_num_rows($result);
    if ($rowcount==true) {
      $_SESSION['customer_login_user']=$customer_email; // Initializing Session

      $deletequery="DELETE FROM cart";
      $deletecart=mysqli_query($conn,$deletequery);
      header("location: ../twostep1.php"); // Redirecting To Other Page
      } 
      else {
      echo "<script language='javascript'>alert('Username or Password is invalid');</script>"; 
      }
      
      
  }

  if(isset($_POST ['Govlogin'])) {
  
    $gov_username=$_POST['gov_username'];
    $pass=$_POST['gov_password'];

    $gov_password=SHA1($pass);

    $checkquery = "SELECT * from `Governmentlogin` where Admin_name='".$gov_username."' and Admin_password='".$gov_password."' ";
    $result = mysqli_query($conn, $checkquery);
    $rowcount=mysqli_num_rows($result);
    if ($rowcount==true) {
      $_SESSION['Gov_user']=$gov_username; // Initializing Session
      header("location: ../government_index.php"); // Redirecting To Other Page
      } 
      else {
      echo "<script language='javascript'>alert('Username or Password is invalid');</script>"; 
      }
      
      
  }

?>