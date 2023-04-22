<?php
session_start();
include('js/config/config.php');
//login 
if (isset($_POST['sign-in'])) {
    echo "Sign-in button clicked!";
  $user_email = $_POST['email'];
  $user_password = sha1(md5($_POST['password'])); //double encrypt to increase security
  $stmt = $mysqli->prepare("SELECT user_email, user_password, user_id  FROM bs_user WHERE (user_email =? AND user_password =?)"); //sql to log in user
  $stmt->bind_param('ss',  $user_email, $user_password); //bind fetched parameters
  $stmt->execute(); //execute bind 
  $stmt->bind_result($user_email, $user_password, $user_id); //bind result
  $rs = $stmt->fetch();
  $_SESSION['user_id'] = $user_id;
  if ($rs) {
    //if its sucessfull
	
    header("location:Membership/welcoming.html");
  } else {
    $err = "Incorrect Authentication Credentials ";
  }
}
?>