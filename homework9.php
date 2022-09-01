<?php
   //Write a PHP program to find factorial of a number using recursive function.
   function factorial($number){
    if($number < 2){
        return 1;
    }else{
        return ($number * factorial($number - 1));
    }
   }

   echo factorial(4);
?>
