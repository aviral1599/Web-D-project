

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
        include 'includes/check_if_added.php';
         ?>
          
        <?php
        include 'login.php';
        ?>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="thumbnail">
                        <img src="img/6pro.jpg">
                    </div>
                </div>
                <div class="col-xs-6">
                    <h2>Realme 6 Pro (Lightening Blue, 128 GB) (8 GB RAM)</h2><br>
                    <hr>
                    <center><h3>Rs. 19,999</h3></center>
                     <center><?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" data-toggle="modal" data-target="#exampleModalLong" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?></center>
                     <br><br>
                     <ol>
                         <li>8 GB RAM | 128 GB ROM | Expandable Upto 256 GB</li>
                         <li>16.76 cm (6.6 inch) Full HD+ Display | 90 Hz Ultra Smooth Display</li>
                         <li>64MP + 12MP + 8MP + 2MP | 16MP + 8MP Dual Front Camerar</li>
                         <li>4300 mAh Battery | 30W Flash Charge</li>
                         <li>Snapdragon 720G Processor | Side Fingerprint Sensor | Dual In Display Selfie</li>
                         <li>30 W Flash Charge, 90 Hz Ultra Smooth Display</li>
                         <li>Colour:Lightening Blue</li>
                     </ol>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
    
</html>