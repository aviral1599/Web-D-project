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
                        <img src="img/promax.jpg">
                    </div>
                </div>
                <div class="col-xs-6">
                    <h2>Apple iPhone 11 Pro Max (64GB) - Silver</h2><br>
                    <hr>
                    <center><h3>Rs. 109,900</h3></center>
                     <center><?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?></center>
                     <br><br>
                     <ol>
                         <li>6.5-inch Super Retina XDR OLED display</li>
                         <li>Water and dust resistant (4 meters for up to 30 minutes, IP68)</li>
                         <li>Triple-camera system with 12MP Ultra Wide, Wide, and Telephoto cameras; Night mode, Portrait mode, and 4K video up to 60fps</li>
                         <li>12MP TrueDepth front camera with Portrait mode, 4K video, and Slo-Mo</li>
                         <li>Face ID for secure authentication and Apple Pay</li>
                         <li>A13 Bionic chip with third-generation Neural Engine</li>
                         <li>Fast charge with 18W adapter included</li>
                     </ol>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
    
</html>

