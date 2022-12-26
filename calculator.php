<?php
    
    $number1 =$_POST['num1'] ?? '';
    $number2 =$_POST['num2'] ?? '';
    $number3 =$_POST['num3'] ?? '';
    $operation =$_POST['op'] ?? '';
    $numberArray =[$number1, $number2, $number3];
    $result ='';

    if(isset($operation)){
        if($operation== "+"){
            $result = $number1 + $number2 + $number3;
        }elseif($operation == "-"){
            $result = $number1 - $number2 - $number3;
        }elseif($operation == "*"){
            $result = $number1 * $number2 * $number3;
        }elseif($operation == "/"){
            $result = $number1 / $number2 / $number3;
        }elseif($operation == "%"){
            $result = $number1 % $number2 % $number3;
        }elseif($operation == "Avg"){
            $result = array_sum($numberArray) / count($numberArray);
        }elseif($operation == "Min"){
            $result = min($numberArray);
        }elseif($operation == "Max"){
            $result = max($numberArray);
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="POST">
    <div>
        <label for="num1">Number1</label>
        <input type="number" name="num1" id="num1">
    </div>

    <div>
        <label for="num2">Number2</label>
        <input type="number" name="num2" id="num2">
    </div>

    <div>
        <label for="num2">Number3</label>
        <input type="number" name="num3" id="num2">
    </div>

    <div>
        <label for="result">Result : </label>
        <input type="text" value =" <?php echo $result;?>">
    </div>

    <div>
        <input type="submit" name="op" value="+">
        <input type="submit" name="op" value="-">
        <input type="submit" name="op" value="*">
        <input type="submit" name="op" value="/">
        <input type="submit" name="op" value="%">
        <input type="submit" name="op" value="C">
        <input type="submit" name="op" value="Avg">
        <input type="submit" name="op" value="Min">
        <input type="submit" name="op" value="Max">

    </div>

    </form>

    <?php
        echo "<br> Ascending order of ";
        sort($numberArray);
        print_r($numberArray);

        echo "<br> Descending order of ";
        rsort($numberArray);
        print_r($numberArray);
    ?>
</body>
</html>