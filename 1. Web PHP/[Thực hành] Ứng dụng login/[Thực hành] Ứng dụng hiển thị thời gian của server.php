<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<style type="text/css">
    .login{
        width:200px;
        height:200px;
        margin: 0px;
        padding: 10px;
        border: 1px black;
    }
    .login input{
        padding: 5px;
        margin: 5px;
    }
    fieldset{
        width:10%;
    }
</style>
<body>
<form action="index.php" method="get">
    <fieldset>
        <div class="login">
          <h2>login</h2>
            <input type="text" name="user-name" placeholder="account">
            <input type="password" name="user-password" placeholder="password">
            <input type="submit">
        </div>
    </fieldset>
</form>
</body>
</html>