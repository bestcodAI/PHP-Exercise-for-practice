<?php 
// whith the help of array_diff() function, we also can remove specific elements from an array.
  $delete_item = 'april';
  // take a list of months in an array
  $months = array('jan','feb','march','april','may');
  $final_months = array_diff($months, array($delete_item));

  // print array to see lastest values
  var_dump($final_months);
?>