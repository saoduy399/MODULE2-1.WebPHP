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