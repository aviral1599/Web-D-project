<?php
 function increment($number) {
 $number = $number + 1;
 die($number);
 return $number;
 }
 $number = 1;
 increment($number);
 echo "Program completed";
?>