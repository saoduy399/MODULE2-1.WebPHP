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
    tr td{
        padding:0px;
        text-align: center;
        width:100px;
        height:50px
    }
</style>
<body>
<table border="1px">
    <h2>list of supersentai</h2>
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Age</td>
        <td>Address</td>
        <td>Job</td>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("name" => "Gao red", "age" => "50", "address" => "Tokyo", "job" => "Supersentai"),
        "2" => array("name"=> "Gao white", "age" => "30", "address" => "Tokyo", "job" => "Assisstance"),
        "3" => array("name" => "Gao blue", "age" => "60", "address" => "Tokyo", "job"=> "Shark"),
        "4" => array("name" => "Gao yellow", "age" => "40", "address" => "Tokyo", "job" => "Eagle"),
        "5" => array("name" => "Gao black", "age" => "60", "address" => "Tokyo", "job" => "OX"),
    );

    foreach($customerlist as $key => $value){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value['name']."</td>";
        echo "<td>".$value['age']."</td>";
        echo "<td>".$value['address']."</td>";
        echo "<td>".$value['job']."</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>

