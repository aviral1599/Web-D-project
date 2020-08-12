<?php

require 'includes/common.php';


 $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  
  $pass = rand(999, 99999);
$pass_hash = md5($pass);
  
$query = "SELECT * FROM `users` WHERE email = '$email'";
	$res = mysqli_query($connection, $query);
       if(mysqli_fetch_row($res) ==0){
             header('location: forgotpass.php?error=email');
       }
       else{
$r = mysqli_fetch_assoc($res);
     
$email = $r['email'];
 $usql = "UPDATE `users` SET password='$pass_hash' WHERE email='$email'";
      $result = mysqli_query($connection, $usql);
	
      $r = mysqli_fetch_assoc($result);
		$password = $r['password'];
		$to = $r['email'];
		$subject = "Your Recovered Password";
 
		$message = "Please use this password to login " . $password;
		$headers = "From : e-store@xyz.com";
		if(mail($to, $subject, $message, $headers)){
		 header('location: forgotpass.php?error=sent');
		}else{
		 header('location: forgotpass.php?error=prob');
		}
       }
        
?>       