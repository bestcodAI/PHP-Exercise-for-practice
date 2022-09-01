<?php 
  //You need to write a PHP program to calculate electricity bill using if-else conditions.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP -Calculate Electricity Bill</title>
</head>
<body>
    <?php 
       $result_str = $result = '';
       if(isset($_POST['unit-submit'])){
        $units = $_POST['units'];
        if(!empty($units)){
            $result = calculate_bill($units);
            $result_str = 'Total amount of '.$units.'-'.$result;
        }
       }
    function calculate_bill($units){
        $units_cost_first = 3.50;
        $units_cost_secont = 4.00;
        $units_cost_third = 5.20;
        $units_cost_forth = 6.50;

        if($units <= 50){
            $bill = $units * $units_cost_first;
        }
        elseif($units > 50 && $units <= 100){
            $temp = 50 * $units_cost_first;
            $remaining_units = $units - 50;
            $bill = $temp + ($remaining_units * $units_cost_secont);
        }
        elseif($units > 100 && $units <= 200){
            $temp = (50 * 3.5) + (100 * $units_cost_secont);
            $remaining_units = $units - 150;
            $bill = $temp + ($remaining_units * $units_cost_third);
        }
        else{
            $temp = (50 * 3.5) + (100 * $units_cost_secont) + (100 * $units_cost_third);
            $remaining_units = $units - 250;
            $bill = $temp + ($remaining_units * $units_cost_forth);
        }
        return number_format((float)$bill, 2, '.','');
    }
    ?>

    <div class="page-wrap">
        <h1>Php -Calculate Electricity Bill</h1>

        <form action="" method="post" id="quiz-form">
            <input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            <input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
        </form>
        <div>
            <?php echo '<br/>' .$result_str; ?>
        </div>
    </div>

</body>
</html>