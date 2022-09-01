<?php 
  // Write a program to calculate factorial of a number using for loop in php
  $num = 3;
  $factorial = 1;
  echo "Show number factorial: ";
  for($x=$num; $x >=1; $x--)
  {
    echo $x."*";
     $factorial = $factorial * $x;
  }

  
  echo "</br>The factorial of $num is $factorial";


?>