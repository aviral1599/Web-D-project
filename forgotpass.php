
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
                
                <div class="col-xs-6 col-xs-offset-3">
                    <h1>Forgot Password</h1>
                   
                    <form method="POST" action="forgotpass_script.php">
                        
                         <div class="form-group">
                             <label>Email</label>
                            <input type="email"  class="form-control" name="email"  placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                        </div>
                        

                         
                        <button type="submit" class="btn btn-primary">Submit</button><br><br>
                        
                         <?php 
        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
         if(strpos($fullurl,"error=email")==true)
         {
         echo "<span class='red'>Enter Correct E-mail id </span>" ;
         
         }
          elseif(strpos($fullurl,"error=sent")==true)  {
              echo "<span class='red'>Password Recovered successfully and sent to your Email-id</span>" ;
          }     
          elseif(strpos($fullurl,"error=prob")==true)  {
              echo "<span class='red'>Not able to recover password</span>" ;
          }  
      
?>
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
