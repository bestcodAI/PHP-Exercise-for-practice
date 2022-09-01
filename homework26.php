<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array to string</title>
</head>
<body>
    <?php //connect to data.php ?>
    <form action="data.php" method="post">
        Username: <input type="text" name="username" placeholder="Enter name" require /><br/><br/>
        Select your favorite colors:<br/>
        Red <input type="checkbox" name="check_list[]" value="red"/><br/>
        Blue <input type="checkbox" name="check_list[]" value="blue"/><br/>
        Green <input type="checkbox" name="check_list[]" value="green" /><br/>
        Yellow <input type="checkbox" name="check_list[]" value="yellow"/><br/>
        Pink <input type="checkbox" name="check_list[]" value="pink"/><br/>
        Black <input type="checkbox" name="check_list[]" value="black"/><br/>
        White <input type="checkbox" name="check_list[]" value="white"/><br/><br/>
        <input type="submit" name="submit" value="Submit"/> <br/>
    </form>
</body>
</html>