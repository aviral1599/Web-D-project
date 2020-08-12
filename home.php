<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.


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
        
        <div>
    <marquee width="100%" direction="left" height="100px";>
SALE : Upto 40% Off on All Products . Sale Ends 14th April 2020. Hurry Up Shop Now
</marquee>
        </div>
        
        <div class="container">
        <div class="jumbotron other">
            
            <h2><center>Welcome to E-store</center></h2>
            <p><center> Largest E-commerce Website For mobiles </center></p>
            </div>
        </div>
            <hr>
            
            
            <div class="row text-center">
                <div class="col-xs-4 home-feature">
                    
                            <div class="thumbnail">
                                <img class="img-responsive" class="size" src="img/11prore.jpg">
                                <div class="caption">
                                    <h3><center>Iphone 11 pro </center></h3>
                                    <center> <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {?>
                                      <p><a href="11pro.php" class="btn btn-block btn-primary">Buy Now</a></p>
                    <?php } ?>   </center>
                                </div>
                            </div>
                </div>
                <div class="col-xs-4">
                    
                            <div class="thumbnail">
                                <img class="img-responsive" src="img/promaxre.jpg">
                                <div class="caption">
                                    <h3><center>Iphone 11 pro Max </center></h3>
                                    <center> <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {?>
                                      <p><a href="promax.php" class="btn btn-block btn-primary">Buy Now</a></p>
                    <?php } ?>   </center>
                                </div>
                            </div>
                </div>
                <div class="col-xs-4">
                    
                            <div class="thumbnail">
                                <img class="img-responsive" src="img/8prore.jpg">
                                <div class="caption">
                                    <h3><center>Redmi Note 8 Pro </center></h3>
                                    <center> <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {?>
                                      <p><a href="8pro.php" class="btn btn-block btn-primary">Buy Now</a></p>
                    <?php } ?>   </center>
                                </div>
                            </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-xs-4">
                    
                            <div class="thumbnail">
                                <img class="img-responsive" src="img/9prore.jpg">
                                <div class="caption">
                                    <h3><center>Redmi Note 9 Pro </center></h3>
                                   <center> <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {?>
                                      <p><a href="9pro.php" class="btn btn-block btn-primary">Buy Now</a></p>
                    <?php } ?>   </center>
                                </div>
                            </div>
                </div>
                <div class="col-xs-4">
                    
                            <div class="thumbnail">
                                <img class="img-responsive" src="img/realme6re.jpg">
                                <div class="caption">
                                    <h3><center>Realme 6</center></h3>
                                    <center> <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {?>
                                      <p><a href="realme6.php" class="btn btn-block btn-primary">Buy Now</a></p>
                    <?php } ?>   </center>
                                </div>
                            </div>
                </div>
                <div class="col-xs-4">
                    
                            <div class="thumbnail">
                                <img class="img-responsive" src="img/6prore.jpg">
                                <div class="caption">
                                    <h3><center>Realme 6 pro </center></h3>
                                   <center> <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {?>
                                      <p><a href="6pro.php" class="btn btn-block btn-primary">Buy Now</a></p>
                    <?php } ?>   </center>
                                </div>
                            </div>
                </div>
                
            </div>
        </div>
        
        
    
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>


