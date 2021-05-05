<?php
if ($_SERVER["REQUEST_METHOD"]==="GET"){
    $username = $_GET["user-name"];
    $userpassword = $_GET["user-password"];

    if($username==="DuyTran" && $userpassword==="1234"){
        echo "Welcome back, master!";
    } else {
        echo "Who the fuck are you?";
    }
}
