<?php


if(isset($_POST["sum"])){
    $result= $_POST["num1"] + $_POST["num2"];

    echo $result-$_POST["num3"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">

        <div>
            <label for="num1">Number1</label>
            <input type="text" name="num1">
        </div>

        <div>
            <label for="num1">Number2</label>
            <input type="text" name="num2">
        </div>

        <div>
            <label for="num1">Number3</label>
            <input type="text" name="num3">
        </div>
   
        <input type="submit" value="submit" name="sum">
    </form>
    
</body>
</html>