<?php
require("includes/common.php");
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: home.php');
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="style.css" rel="stylesheet" type="text/css"/> 
         <title>Sign Up</title>
         <style>
             body{
                 padding-top: 70px;
             }
         </style>
    </head>
    <body>
                          
 <?php 
include 'includes/header.php';
?>
        <?php 
include 'login.php';
?>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <br><br><br><br>
                    <div class="thumbnail">
                         <img src="img/signup.png">
                    </div>
                </div>
                <div class="col-xs-6 col-xs-offset-2">
                    <h1>Sign Up</h1>
                    <?php 
        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
         if(strpos($fullurl,"signup=empty")==true)
         {
         echo "<span class='red'>You did not fill all the fields </span>" ;
         
         }
                    
        elseif(strpos($fullurl,"signup=exists")==true)
         {
         echo "<span class='red'>Email Already Exists</span>" ;
        
         }
          elseif(strpos($fullurl,"signup=validem")==true)
         {
         echo  "<span class='red'>Not a valid Email Id</span>" ;
        
         }
          elseif(strpos($fullurl,"signup=validph")==true)
         {
         echo "<span class='red'>Not a valid phone number</span>"; 
         
         }
?>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text"  class="form-control" name="name"  placeholder="Name" >
                        </div>
                         <div class="form-group">
                             <label>Email</label>
                            <input type="email"  class="form-control" name="email"  placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password"  class="form-control" name="password"  placeholder="Password" data-toggle="password"  required = "true" pattern=".{6,}">
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input type="number"  class="form-control" name="contact" min="1000000000" max="9999999999" placeholder="Contact-No." >
                        </div>
                         <div class="form-group">
                             <label>City</label>
                            <input type="text"  class="form-control" name="city"  placeholder="City">
                        </div>
                        <div class="form-group">
                            <label>Address</label><br>
                           <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                        </div>

                         
                        <button type="submit" class="btn btn-primary">Submit</button><br><br>
                    </form>
                    
                </div>
        </div>
        </div>
            
        <br><br>
            
           <?php 
include 'includes/footer.php';
?>
    </body>
</html>

