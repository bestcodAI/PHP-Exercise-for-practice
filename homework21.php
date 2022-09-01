<?php 
  //Write a PHP program to check weather a number is positive , negative or zero
  $number = 324; // enter any number of your choice here
  if($number > 0) // condition for positive numbers
  {
    echo $number . " is a positive number";
  }elseif($number < 0) // condition for negative number
  {
    echo $number. " is a negative number ";
  }elseif($number == 0) // condition for zero
  {
    echo "You have entered zero";
  }else{
    echo "Please enter a numberic value";
  }
?>