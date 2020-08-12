<?php
require("includes/common.php");
?>

<!DOCTYPE html>


<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="style.css" rel="stylesheet" type="text/css"/> 
         <title>Contact Us</title>
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
             <div class="page-header">
        <center><h2>CONTACT US</h2></center>
    </div>
            <div class="row">
                <div class="col-xs-9">
                    <h3>Live Support</h3><br>
                    <h4>24 HOURS | 7 Days a week | 365 Days a year Live Technical Support</h4><br>
                    <p>Please contact us in case of any query regarding products or shipping. Our customer care staff is available 24/7 .</p>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="img/contactus.png">
                    </div>
                </div>
            </div>
            <div class ="row">
                <div class="col-xs-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Contact Us</div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                  <input type="name" class="form-control" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                  <input type="number"  class="form-control" name="contact" min="1000000000" max="9999999999" placeholder="Contact-No." >
                                </div>
                                <div class="form-group">
                  <textarea name="message"rows="5"cols="60" placeholder="Your Message"></textarea> 
                                </div>
                                
                         <button type="submit" class="btn btn-primary">Submit</button>
                              
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-xs-offset-2">
                    <h3>Company information</h3>
                    <p>410 Terry Ave. North<br>
                        Seattle, WA<br>
                        USA<br><br>
                        Phone :98109-5210<br>
                        Fax: 090086753600<br><br>
                        Email:info@mycompany.com<br>
                        Follow us on Facebook , instagram and twitter
                    
                    
                    </p>
                </div>
            </div>
        </div>
        
        
        
        <?php 
include 'includes/footer.php';
?>
    </body>
    </html>

