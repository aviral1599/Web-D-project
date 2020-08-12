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
                        <img src="img/9pro.jpg">
                    </div>
                </div>
                <div class="col-xs-6">
                    <h2>Redmi Note 9 Pro (Interstellar Black, 6GB RAM, 128GB Storage) - Latest Snapdragon 720G & Gorilla Glass 5 Protection</h2><br>
                    <hr>
                    <center><h3>Rs. 16,999</h3></center>
                     <center><?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?></center>
                     <br><br>
                     <ol>
                         <li>48MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 16MP facing camera</li>
                         <li>16.9418 centimeters (6.67-inch) FHD+ full screen dot display LCD multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass</li>
                         <li>Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor</li>
                         <li>Memory, Storage & SIM: 6GB RAM | 128GB internal memory expandable up to 512GB with dedicated SD card slot | Dual SIM (nano+nano) dual-standby (4G+4G)</li>
                         <li>5020mAH lithium-polymer large battery providing talk-time of 29 hours and standby time of 492 hours | 18W fast charger in-box and Type-C connectivity</li>
                         <li>1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
                         <li>Box also includes: Power adapter, USB cable, SIM eject tool, Warranty card, User guide, Clear soft case, Screen protector pre-applied on the phonet</li>
                     </ol>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
    
</html>