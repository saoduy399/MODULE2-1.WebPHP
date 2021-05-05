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
<form method="POST">
    <fieldset>
        <div>
            <h2>Type here a number and it will read it for ya.</h2>
            <input type="number" name="number">
            <input type="submit" value="translate">
        </div>
    </fieldset>
</form>
</body>
</html>
<?php
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ){
    $number=$_POST['number'];
}

$one=array('0'=>'zero', '1'=>"one", '2'=>'two','3'=>'three','4'=>'four','5'=>'five','6'=>'six','7'=>'seven','8'=>'eight','9'=>'nine');
$two=array('10'=>'ten','11'=>'eleven','12'=>'twelve','13'=>'thirteen','14'=>'fourteen','15'=>'fifteen','16'=>'sixteen','17'=>'seventeen','18'=>'eightteen','19'=>'nineteen');
$three=array('20'=>'twenty','30'=>'thirty','40'=>'fourty','50'=>'fifty','60'=>'sixty','70'=>'seventy','80'=>'eighty','90'=>'ninety');

if ($number>=0 && $number<9){
    foreach($one as $num => $read){
        if($number===$num){
            echo $read;
        }
        }
    } elseif ($number>10 && $number<20){
            foreach($two as $num => $read){
                echo $read;
            }
} elseif($number>20&&$number<100){
    foreach($one as $num => $read){
        echo $read;
    }
}

?>