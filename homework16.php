<?php 
 // You need to write a program in PHP to remove specific element by value from an array using PHP program
 //with the help of array_search() function, we can remove specific elements from an array
  $delete_item = 'march';
  // take a list of month in an array
$months = array('jan','feb','march','april','may');
if(($key = array_search($delete_item, $months)) !== false){
    unset($months[$key]);
}
// print array to see latest value
var_dump($months);
?>