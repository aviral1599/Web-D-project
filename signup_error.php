<?php 
        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
         if(strpos($fullurl,"signup=empty")==true)
         {
         echo "<span class='red'>You did not fill all the fields </span>" ;
         
         }
                    
        elseif(strpos($fullurl,"signup=exists")==true)
         {
         echo "<span class='red'>Email Already Exists</span>" ;
        
         }
          elseif(strpos($fullurl,"signup=validem")==true)
         {
         echo  "<span class='red'>Not a valid Email Id</span>" ;
        
         }
          elseif(strpos($fullurl,"signup=validph")==true)
         {
         echo "<span class='red'>Not a valid phone number</span>"; 
         
         }
?>

