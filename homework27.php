<?php 
  //You need to find weather an array is subset of another array
  //Define two array
  $array1 = array('a','1','2','3','4');
  $array2 = array('a','3');

  // intersect/matched value should be equal to first array
  if(array_intersect($array2, $array1) === $array1){
    echo "It is a subset";
  }else{
    echo "Not a subset";
  }
?>