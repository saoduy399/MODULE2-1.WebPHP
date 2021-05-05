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
            <h2>Type here a number and it will read it for ya.</h2>
            <input type="number" name="mynumber">
            <input type="submit" value="translate">
        </div>
    </fieldset>
</form>
</body>
</html>
<?php

//$one=array('0'=>'zero', '1'=>"one", '2'=>'two','3'=>'three','4'=>'four','5'=>'five','6'=>'six','7'=>'seven','8'=>'eight','9'=>'nine',
//    '10'=>'ten','11'=>'eleven','12'=>'twelve','13'=>'thirteen','14'=>'fourteen','15'=>'fifteen','16'=>'sixteen','17'=>'seventeen','18'=>'eightteen','19'=>'nineteen',
//    '20'=>'twenty','30'=>'thirty','40'=>'fourty','50'=>'fifty','60'=>'sixty','70'=>'seventy','80'=>'eighty','90'=>'ninety');
//
//if ( $_SERVER["REQUEST_METHOD"] === "POST" ) {
//    $number = $_POST['mynumber'];
//    foreach ($one as $num => $read) {
//        if ($number === $num) {
//            echo $read;
//        }
//    }
//}

function readOneNumber($number){
    $oneDigits=array("zero","one","two","three","four","five","six","seven","eight","nine");
    return $oneDigits[$number];
}

function readTwoNumber($number){
    $teens=array(10 => "ten", 11 => "eleven", 12 => "twelve", 13 => "thirteen", 14=>"fourteen", 15 =>"fifteen", 16 => "sixteen", 17 => "seventeen", 18 => "eighteen", 19 => "nineteen");
    $tys=array(2=>"twenty", 3=>"thirty", 4=>"fourty", 5=>"fifty", 6=>"sixty", 7=>"seventy", 8=>"eighty", 9=>"ninety");
    if($number>10 && $number <20){
        return $teens[$number];
    } else {
        if($number[1]===0){
            return $tys[$number[0]];
        } else {
            return $tys[$number[0]] .' '.readOneNumber($number[1]);
        }
    }
}

function readThreeNumber($number){
    if($number%100===0 && $number!=0){
        return readOneNumber($number[0]) . ' hundred';
    } elseif($number[1]=='0'){
        return readOneNumber($number[0]) . ' hundred and '. readOneNumber($number[2]);
    } else {
        return readOneNumber($number[0]) . ' hundred and '. readTwoNumber($number[1].$number[2]);
    }
}
echo readThreeNumber('999'
)
?>