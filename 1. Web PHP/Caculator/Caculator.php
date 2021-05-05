<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset>
        <h3>CACULATOR</h3>
        <div>
            <input type="number" name="numberone" placeholder="number">
            <select name="operator">
                <option value="Addition" name="addition">Addition</option>
                <option value="subtraction" name="subtraction">Subtraction</option>
                <option value="multiplication" name="multiplication">Multiplication</option>
                <option value="division" name="division">Division</option>
            </select>
            <input type="number" name="numbertwo" placeholder="number">
            <input type="submit" value="caculator">
        </div>
    </fieldset>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $one=$_POST["numberone"];
    $two=$_POST["numbertwo"];
    $caculate=$_POST["operator"];
    switch($caculate){
        case "addition":
            $result=$one+$two;
            echo $result;
            break;
        case "subtraction":
            $result=$one-$two;
            echo $result;
            break;
        case "multiplication":
            $result=$one*$two;
            echo $result;
            break;
        case "division":
            $result=$one/$two;
            echo $result;
            break;
    }
}