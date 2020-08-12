<?php
$con=mysqli_connect("localhost","root","","shopping")or die($mysqli_error($con));

?>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">LOGIN</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          
          <?php
        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
         if(strpos($fullurl,"error=id")==true)
         {
         echo  "<span class='red'>Please enter correct E-mail and  Password</span>" ;
         
         }
                    
       
          ?>
          
          
          <form  method="POST" action="login_script.php">
              
              
              <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="E-mail">
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              
              <button type="submit" class="btn btn-primary">Login</button>
          </form>
          
           <?php
        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
         if(strpos($fullurl,"error=id")==true)
         {
         echo  "<span class='red'>Please enter correct E-mail and  Password</span>" ;
        
         }
                    
       
          ?>
          
          
          
      </div>
      <div class="modal-footer">
          <p>Don't have an account?<a href="signup.php"> Register</a></p>
          <p><a href="forgotpass.php">Forgot Password?</a></p>
        
      </div>
    </div>
  </div>
</div>