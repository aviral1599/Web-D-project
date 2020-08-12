<?php
require("includes/common.php");


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
         <title>E-Store</title>
         <style>
             body{
                 padding-top: 50px;
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
      
        
        <div id="banner_image">
              <div>
    <marquee width="100%" direction="left" height="100px";>
SALE : Upto 40% Off on All Products . Sale Ends 14th April 2020. Hurry Up Shop Now
</marquee>
        </div>
                 <div class="container">
                       
                      <div class="jumbotron">
            <h2><center>Welcome to E-store</center></h2>
            <p><center> Largest E-commerce Website For mobiles </center></p>
        </div>
            <hr>
                    <center>
                        <div id="banner_content">
                            <h1>We sell Mobile phones</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button"  class="btn btn-danger btn-lg active">Shop Now</a></p>
                    <?php } else {?>
                                      <p><a href="home.php"  role="button" class="btn btn-danger btn-lg active">Shop Now</a></p>
                    <?php } ?>
                        </div>
                    </center>
                </div>
            </div>
        
    
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>



