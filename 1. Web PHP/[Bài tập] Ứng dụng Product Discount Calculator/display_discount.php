<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $myprice=$_POST["List price"];
    $percentage=$_POST["Discount Percent"];
    $myproduct=$_POST["Product Description"];
    $DiscountAmount=$myprice*$percentage*0.1;
}
