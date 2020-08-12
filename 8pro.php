<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (!isset($_SESSION['email'])) {
  header('location: index.php');
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
        include 'includes/check_if_added.php';
        ?>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="thumbnail">
                        <img src="img/8pro.jpg">
                    </div>
                </div>
                <div class="col-xs-6">
                    <h2>Redmi Note 8 Pro (Gamma Green, 6GB RAM, 128GB Storage with Helio G90T Processor)</h2><br>
                    <hr>
                    <center><h3>Rs. 16,999</h3></center>
                     <center><?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?></center>
                     <br><br>
                     <ol>
                         <li>64MP AI Quad rear camera with portrait, ultra-wide lens, macro lens, LED flash, AI support, beautify support | 20MP front camera</li>
                         <li>Performance: Smooth gaming experience with powerful Helio G90T gaming processor, Game turbo and Liquid cooling technology</li>
                         <li>16.58 centimeters (6.53-inch) Dot Notch HDR Display with 2340 x 1080 pixels resolution and 19.5:9 aspect ratio | 2.5D curved glass</li>
                         <li>With Amazon Alexa built-in: Simply say “Alexa” to play music, hear the news, control your smart devices or check the weather wherever you are. Just ask - and Alexa will respond instantly</li>
                         <li>Memory, Storage & SIM: 6GB RAM | 128GB internal memory expandable up to 512GB | Dual SIM (nano+nano) dual-standby (4G+4G)</li>
                         <li>Android Pie v9 operating system with 2.05GHz MediaTek Helio G90T octa core processor</li>
                         <li>4500mAH lithium-polymer battery providing talk-time of 41 hours and standby time of 666 hours | 18W fast charger. Built-in rechargeable battery. USB Type-C connector port</li>
                     </ol>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
    
</html>