<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    fieldset{
        width:250px;
    }
</style>
<body>
<form method="post">
    <fieldset>
        <div class="dic">
            <h2>Dictionary</h2>
            <input type="text" name="search" placeholder="word"/>
            <input type="submit" value="search">
        </div>
    </fieldset>
    <?php
    $dictionary=array("Hello"=>"Xin chao", "Goodbye" => "tam biet", "Code" => 'gym');
    if ($_SERVER['REQUEST_METHOD']==="POST"){
        $searchword=$_POST['search'];
        $flag=0;
        foreach($dictionary as $word => $description){
            if($searchword===$word){
                echo "the word: $word is means: $description";
                $flag=1;
            }
        }
        if($flag==0){
            echo "can not find that word";
        }
    }
    ?>
</form>
</body>
</html>