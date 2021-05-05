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
    table{
        border: 1px solid black;
    }
    tr,td{
        border: 1px solid black;
        width: 70px;
        height: 30px;
    }
</style>
<body>
<form action="">
    <fieldset>
        <legend>TÌm kiếm</legend>
        From: <input type="date" name="" id=""><br>
        To <input type="date" name="" id=""><br>
        <input type="submit" value="Search">
    </fieldset>
</form>
<table>
    <tr>
        <td>STT</td>
        <td>Tên </td>
        <td>Ngày SInh </td>
        <td>Địa chỉ </td>
        <td>Hình ảnh</td>
    </tr>
</table>
</body>
<?php
$danhsachhocsinh = array(
    "1" => array("name" => "Loc van khoi", 'day_of_birth' => "1995/04/07", "address" => "Lạng sơn", "image" => "thatvong.jpg"),
    "2" => array("name" => "Loc van a", 'day_of_birth' => "1995/04/07", "address" => "Lạng sơn", "image" => "thatvong.jpg"),
    "3" => array("name" => "Loc van b", 'day_of_birth' => "1995/04/07", "address" => "Lạng sơn", "image" => "thatvong.jpg"),
    "4" => array("name" => "Loc van c", 'day_of_birth' => "1995/04/07", "address" => "Lạng sơn", "image" => "thatvong.jpg")
);
foreach ($danhsachhocsinh as $key => $value) {
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$value['name']."</td>";
    echo "<td>".$value['day_of_birth']."</td>";
    echo "<td>".$value['address']."</td>";
    echo "<td>".$value['image']."</td>";
    echo "</tr>";
}
?>
</html
