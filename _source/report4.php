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
  $wom = mysql_query("SELECT * FROM profile WHERE Sex = 'Woman'");
  $wom1 = mysql_num_rows($wom);
  $man = mysql_query("SELECT * FROM profile WHERE Sex =  'Man'");
  $man1 = mysql_num_rows($man);
  $num = mysql_num_rows($result);
  ?>
  <?php
echo date("d.m.Y");
echo "&nbsp";
echo date("H:i");
?><br><br>
<b>Уже зарегистрировались: &nbsp<?=$num;?><br>
<p style="font-size:18px"><b>Гендерная статистика</p>
  <table border="1" style="background-color:FFFFFF;border-collapse:collapse;border:1px solid #000000;color:000000" cellpadding="3">
  <tr><td style="width: 100px;">Юноши</td><td><?=$wom1;?></td></tr>
  <tr><td>Девушки</td><td><?=$man1;?></td></tr>
  </table>
</body>
</html>
