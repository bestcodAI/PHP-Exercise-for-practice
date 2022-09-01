<?php 
  //Write a program to check student grade based on the marks using if-else statement.
  $mark = 40; // you can set mark this here
   
  if($mark >= 60)
  {
    $grad = "First Divistion";
  }elseif($mark >= 45){
    $grad = "Second Division";
  }elseif($mark >= 33){
    $grad = "Third Division";
  }else{
    $grad = "Fail";
  }

  echo "Student grade: ".$grad;
?>