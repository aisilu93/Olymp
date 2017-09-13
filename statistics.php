<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<html>
<head>
<title>Главная</title>
<script  src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
<script src="./js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <script>
  $(document).ready(function() {
    $('select').material_select();
    $(".button-collapse").sideNav();
  });
  </script>
  <?php
mysql_query ("set_client='utf8'");//Следующие 4 строки решают проблему с кодировкой.
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");
$result = mysql_query("SELECT * FROM profile");
$row = mysql_fetch_assoc($result);
$num = mysql_num_rows($result);
$ekall = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Экономика%'");
$ekall1 = mysql_num_rows($ekall);
$matall = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Математика%'");
$matall1 = mysql_num_rows($matall);
$infall = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Информатика%'");
$infall1 = mysql_num_rows($infall);
$oball = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Обществознание%'");
$oball1 = mysql_num_rows($oball);
$istall = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%История%'");
$istall1 = mysql_num_rows($istall);
$users = $ekall1+$matall1+$infall1+$oball1+$istall1;
?>
  <div id="header">
      <p id="title">Всероссийская олимпиада школьников "Миссия выполнима. Твое призвание - финансист!"</p>
      <p class="nav-wrapper" id="title1"><a class="left hide-on-med-and-down" href="main.php">Начало ></a><a class="left hide-on-med-and-down" href="statistics.php">Статистика</a></p>
      <p id="title2">Управление олимпиадой</p>
  </div>
  <div class="row">
    <div class="col s2">
      <div class="card small">
        <div class="card-image">
          <i class="large material-icons">supervisor_account</i>
          <span class="flow-text"><?=$num;?></span>
        </div>
        <div class="card-content">
          <p>Всего школьников</p>
        </div>
      </div>
    </div>
    <div class="col s2">
      <div class="card small">
        <div class="card-image">
    <i class="large material-icons">perm_identity</i>
          <span class="flow-text"><?=$users;?></span>
        </div>
        <div class="card-content">
          <p>Всего зарег. участников</p>
        </div>
      </div>
    </div>
    <div class="col s8">
      <div class="collection">
    <a href="report1.php" class="collection-item"><i class="material-icons left">assignment</i>Общая статистика</a>
    <a href="report2.php" class="collection-item"><i class="material-icons left">language</i>Статистика по регионам</a>
    <a href="report3.php" class="collection-item"><i class="material-icons left">language</i>Статистика по регионам(подробная)</a>
    <a href="report4.php" class="collection-item"><i class="material-icons left">thumbs_up_down</i>Гендерный отчет</a>
      </div>
    </div>
  </div>
  <p id="title2">Графики</p>


</body>
