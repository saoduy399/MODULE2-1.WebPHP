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
        <div>
            <h2>Future Value Calculator</h2>
            <input type="number" name="Inventment-Amount" placeholder="Inventment Amount">
            <input type="number" name="Yearly-Interest-Rate" placeholder="Yearly Interest Rate">
            <input type="number" name="Number-of-Years" placeholder="Number of Years">
            <input type="submit" value="Caculate">
        </div>
    </fieldset>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $invest=$_POST["Inventment-Amount"];
    $rateperyear=$_POST["Yearly-Interest-Rate"];
    $years=$_POST["Number-of-Years"];
    $future = ($invest + ( $invest*$rateperyear))*$years;
    echo $future;
}
?>