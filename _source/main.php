<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<html>
<head>
<title>Главная</title>
<script src="/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
</head>
<body>
  <div id="header">
      <p id="title">Управление олимпиадами</p>
  </div>

  <div class="row">
    <div class="col s6">
      <p id="title2">МИССИЯ</p>
<form class="collection col s6" id="global">
<p id="menu"><a class="collection-item" href="search.php" onclick="document.getElementById('global').submit()" >Главная</a></p>
<p id="menu"><a class="collection-item" href="viewallusers.php" onclick="document.getElementById('global').submit()">Все участники</a><p>
<p id="menu"><a class="collection-item" href="statistics.php" onclick="document.getElementById('global').submit()" >Статистика и отчеты</a></p>
<p id="menu"><a class="collection-item" href="adduser.php" onclick="document.getElementById('global').submit()" >Добавить анкету</a></p>
  </form>
</div>
<div class="col s6">
  <p id="title2">МАГИЯ</p>
  <form class="collection col s6" id="global">
  <p id="menu"><a class="collection-item" href="search.php" onclick="document.getElementById('global').submit()" >Главная</a></p>
  <p id="menu"><a class="collection-item" href="viewallusersmagic.php" onclick="document.getElementById('global').submit()">Все участники</a><p>
  <p id="menu"><a class="collection-item" href="statistics.php" onclick="document.getElementById('global').submit()" >Статистика и отчеты</a></p>
  <p id="menu"><a class="collection-item" href="adduser.php" onclick="document.getElementById('global').submit()" >Добавить анкету</a></p>
    </form>
</div>
</div>
  <div id="information">
    <p id="bllock">Информация</p>
    <ul>
      <li><a href="http://www.fa.ru/dep/olimpcenter/projects/Pages/olimpyc_konkurs.aspx"> Информация на сайте приемной комиссии</a></li>
      <li><a href=""> Нормативные документы</a></li>
    </ul>
  </div>

<div id="footer">
</div>
<?php //"index.php?action=booklist"
switch($_GET['action']){
case 'adduser': include ("adduser.php"); break;
case 'viewallusers': include ("viewallusers.php"); break;
case 'statistics':include("statistics.php");break;
//case...
}
?>
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
}
else
{
// Если не пусты, то мы выводим ссылку
}
?>
</body>
</html>
