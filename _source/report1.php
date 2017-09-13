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
  ?>
  <?php
  $ekeight = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Экономика%' AND Class='8'");
  $ekeight1 = mysql_num_rows($ekeight);
  $eknine = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Экономика%' AND Class='9'");
  $eknine1 = mysql_num_rows($eknine);
  $ekten = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Экономика%' AND Class='10'");
  $ekten1 = mysql_num_rows($ekten);
  $ekeleven = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Экономика%' AND Class='11'");
  $ekeleven1 = mysql_num_rows($ekeleven);
  $ekall = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Экономика%'");
  $ekall1 = mysql_num_rows($ekall);
  $mateight = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Математика%' AND Class='8'");
  $mateight1 = mysql_num_rows($mateight);
  $matnine = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Математика%' AND Class='9'");
  $matnine1 = mysql_num_rows($matnine);
  $matten = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Математика%' AND Class='10'");
  $matten1 = mysql_num_rows($matten);
  $mateleven = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Математика%' AND Class='11'");
  $mateleven1 = mysql_num_rows($mateleven);
  $matall = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Математика%'");
  $matall1 = mysql_num_rows($matall);
  $infeight = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Информатика%' AND Class='8'");
  $infeight1 = mysql_num_rows($infeight);
  $infnine = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Информатика%' AND Class='9'");
  $infnine1 = mysql_num_rows($infnine);
  $inften = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Информатика%' AND Class='10'");
  $inften1 = mysql_num_rows($inften);
  $infeleven = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Информатика%' AND Class='11'");
  $infeleven1 = mysql_num_rows($infeleven);
  $infall = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Информатика%'");
  $infall1 = mysql_num_rows($infall);
  $obeight = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Обществознание%' AND Class='8'");
  $obeight1 = mysql_num_rows($obeight);
  $obnine = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Обществознание%' AND Class='9'");
  $obnine1 = mysql_num_rows($obnine);
  $obten = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Обществознание%' AND Class='10'");
  $obten1 = mysql_num_rows($obten);
  $obeleven = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Обществознание%' AND Class='11'");
  $obeleven1 = mysql_num_rows($obeleven);
  $oball = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%Обществознание%'");
  $oball1 = mysql_num_rows($oball);
  $isteight = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%История%' AND Class='8'");
  $isteight1 = mysql_num_rows($isteight);
  $istnine = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%История%'  AND Class='9'");
  $istnine1 = mysql_num_rows($istnine);
  $istten = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%История%' AND Class='10'");
  $istten1 = mysql_num_rows($istten);
  $isteleven = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%История%' AND Class='11'");
  $isteleven1 = mysql_num_rows($isteleven);
  $istall = mysql_query("SELECT * FROM profile WHERE Subject LIKE '%История%'");
  $istall1 = mysql_num_rows($istall);
  $users = $ekall1+$matall1+$infall1+$oball1+$istall1;
  $num = mysql_num_rows($result);
   ?>
   <?php
 echo date("d.m.Y");
 echo "&nbsp";
 echo date("H:i");
 ?> <br><br>
 <b>Уже зарегистрировались</b><br>
 Всего участников:<?=$users;?><br>
 Всего школьников:<?=$num;?><br>
 <p style="font-size:18px"><b>Общая статистика</p></b>
     <table border="1" style="background-color:FFFFFF;border-collapse:collapse;border:1px solid #000000;color:000000" cellpadding="3">
       <tr><td>Предмет</td><td>8</td><td>9</td><td>10</td><td>11</td><td>Итого</td></tr>
       <tr><td>Экономика</td><td><?=$ekeight1;?></td><td><?=$eknine1;?></td><td><?=$ekten1;?></td><td><?=$ekeleven1;?></td><td><?=$ekall1;?></td></tr>
       <tr><td>Математика</td><td><?=$mateight1;?></td><td><?=$matnine1;?></td><td><?=$matten1;?></td><td><?=$mateleven1;?></td><td><?=$matall1;?></td></tr>
       <tr><td>Информатика</td><td><?=$infeight1;?></td><td><?=$infnine1;?></td><td><?=$inften1;?></td><td><?=$infeleven1;?></td><td><?=$infall1;?></td></tr>
       <tr><td>Обществознание</td><td><?=$obeight1;?></td><td><?=$obnine1;?></td><td><?=$obten1;?></td><td><?=$obeleven1;?></td><td><?=$oball1;?></td></tr>
       <tr><td>История</td><td><?=$isteight1;?></td><td><?=$istnine1;?></td><td><?=$istten1;?></td><td><?=$isteleven1;?></td><td><?=$istall1;?></td></tr>
     </table>
     <p>Школьник - физическое лицо.<br>
     Участник - школьник, зарегистрировавшийся на конкретный предмет олимпиады.<br>
     Один школьник может принять участие в нескольких олимпиадах</p>
</body>
</html>
