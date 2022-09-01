<?php 
// Write a PHP program to check if a person is eligible to vote or not
function check_vote() // function has been declared
{
    $name = "Chamnan";
    $age = 23;
    if($age >= 18){
        echo $name. ", You are eligible for vote";
    }else{
        echo $name.", you are not eligible for vote";
    }
}
check_vote(); // function has been called


?>