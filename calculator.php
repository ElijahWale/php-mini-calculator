<?php
 $value = '';
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
   

    if($operator === "*"){
       $value .= $num1  * $num2;
    }elseif($operator === '/'){
        $value .= $num1 / $num2;
    }elseif($operator === '+'){
       $value .= $num1 + $num2;
    }elseif($operator === '-'){
        $value.= $num1 - $num2;
    }else{
        $value .= "enter operators in symbols";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Calculator</title>
</head>
<body>
<h1>PHP MINI CALCULATOR</h1>
    <form action="" method="POST">
        <label for="">First Number</label>
        <input type="number" name="num1">    
        <br><br>
        <label for="">Operators(+,-,/,*)</label>
        <input type="text" name="operator" placeholder="enter symbols">
        <br><br>
        <label for="">Second Number</label>
        <input type="number" name="num2">
        <br><br>
        <input type="submit" name="submit">
    </form>
    <h3><?= $value ?></h3>
    
</body>
</html>

