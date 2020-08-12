
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
         <title>Settings</title>
         <style>
             body{
                 padding-top: 70px;
             }
         </style>
    </head>
    
    
    <body>
        <?php include 'includes/header.php'; ?>
        <?php include 'login.php'; ?>
        
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Change</button><br><br>
                        
                    </form>
                    <?php
        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
         if(strpos($fullurl,"error=nomatch")==true)
         {
         echo  "<span class='red'>The two passwords don't match</span>" ;
         
         }
         elseif(strpos($fullurl,"error=Updated")==true){
              echo  "<span class='red'>Password Updated Successfully</span>" ;
         }
         elseif(strpos($fullurl,"error=Wrong")==true){
              echo  "<span class='red'>Wrong Old Password</span>" ;
         }
                    
                                                                                          
          ?>
                </div>
            </div>
        </div>
        
        <br><br><br><br>
       <?php 
include 'includes/footer.php';
?>
    </body>
</html>

