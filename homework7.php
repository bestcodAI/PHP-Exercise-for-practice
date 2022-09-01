<?php 
  // Write a program to show day of the week (for example: Monday) based on numbers using switch/ case statement
  $day =  5;
  switch($day){
    case 1:
        echo "It is Monday!";
        break;
    case 2: 
        echo "It is Tuesday!";
        break;
    case 3: 
        echo "It is Wednesday!";
        break;
    case 4: 
        echo "It is Thursday!";
        break;
    case 5:
        echo "It is Friday!";
        break;
    case 6: 
        echo "It is Saturday!";
        break;
    case 7: 
        echo "It si Sunday!";
        break;
    default:
       echo "Invalid number!";
       break;

  }
?>