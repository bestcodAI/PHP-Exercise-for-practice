<?php 
   //Write a PHP program to calculate area of rectangle by using PHP Function
   function rect_area($length = 2, $width = 4) // function has declared
   {
    $area = $length * $width;
    echo "Area of Rectangle with length ".$length." & width " .$width." is ".$area;
   }
   rect_area(); // Function has been called.

?>