<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<html>
<head>
  <title>Статистика регистрации на Всероссийскую олимпиаду школьников "Миссия выполнима. Твое призвание - финансист"</title>
</head>
<body>
  <b>  <p align="center" style="font-size:20px">
      Статистика регистрации на Всероссийскую олимпиаду школьников "Миссия выполнима. Твое призвание - финансист"
    </p></b>
        <?php
  mysql_query ("set_client='utf8'");//Следующие 4 строки решают проблему с кодировкой.
  mysql_query ("set character_set_results='utf8'");
  mysql_query ("set collation_connection='utf8_general_ci'");
  mysql_query ("SET NAMES utf8");
  $result = mysql_query("SELECT * FROM profile");
  $row = mysql_fetch_assoc($result);
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
  $num = mysql_num_rows($result);
  $r=mysql_query("SELECT DISTINCT Region FROM profile");
  $r1=mysql_num_rows($r);
  $r5=mysql_query("SELECT Region, COUNT( Region ) FROM profile GROUP BY Region HAVING COUNT( Region ) >5");
  $r51=mysql_num_rows($r5);
  ?>
  <?php
echo date("d.m.Y");
echo "&nbsp";
echo date("H:i");
?><br><br>
<b>Уже зарегистрировались</b><br>
Всего участников:<?=$users;?><br>
Всего школьников:<?=$num;?><br>
<p style="font-size:18px"><b>География олимпиады</p>
  <table border="1" style="background-color:FFFFFF;border-collapse:collapse;border:1px solid #000000;color:000000" cellpadding="3">
  <tr><td>Количество представленных регионов</td><td><?=$r1;?></td></tr>
  <tr><td>Представленные не менее 5-ю участниками</td><td><?=$r51;?></td></tr>
  </table>
</body>
</html>
