<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<html>
<head>
<meta charset="utf-8>"
<title>Вход</title>
<script  src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
<script src="./js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
</head>
    <body>
    <h2>Регистрация</h2>
    <form action="saveuser.php" method="post">
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
</p></form>
    </body>
    </html>
