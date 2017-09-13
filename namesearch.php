<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<?php include ("search.php");?>

<html>
<head>
<title>Все пользователи</title>
<script src="/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<style>
#maintable, #information2{
  display: none;
  label
  {
    position: absolute;
  }
  }
</style>
<body>
  <script>
  $(document).ready(function() {
   $('select').material_select();
   $(".button-collapse").sideNav();
 });
 </script>
<?php
$namesearch= $_POST['namesearch'];
$sql= "SELECT * FROM profile WHERE Surname LIKE '%$namesearch%'";
mysql_query ("set_client='utf8'");//Следующие 4 строки решают проблему с кодировкой.
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");
$result = mysql_query($sql);
$num = mysql_num_rows($result);
$text .= '<p>По фамилиии: <strong>'.$namesearch.'</strong>';
$text .= ' найдено участников '.$num.'</p>' ;
echo "<label style='margin-left:10px;font-size:16px'>$text</label>";
$row = mysql_fetch_assoc($result);
?><br>
<div align="center" class="row">
  <div id="maintable3" class="col s11">
  <table class="container striped highlight responsive-table">
    <?php
  $number = 0;
  echo "<tr class=card-panel teal lighten-2 >";
  echo "<th>№</th>";
  echo "<th>ID</th>";
  echo "<th>Фамилия</th>";
  echo "<th>Имя</th>";
  echo "<th>Отчество</th>";
  echo "<th>Дата рождения</th>";
  echo "<th>Пол</th>";
  echo "<th>Телефон</th>";
  echo "<th>Домашний телефон</th>";
  echo "<th style='width: 100px;'>Предмет</th>";
  echo "<th>Email</th>";
  echo "</tr>";
  do {
      $number++;
      $Id = $row['Id'];
      $Surname = $row['Surname'];
      $Name = $row['Name'];
      $MiddleName = $row['MiddleName'];
      $Birthday = $row['Birthday'];
      $Sex = $row['Sex'];
      $ContactPhone = $row['ContactPhone'];
      $HomePhone = $row['HomePhone'];
      $Privileges1= $row['Privileges1'];
      $Privileges2 = $row['Privileges2'];
      $Nationality = $row['Nationality'];
      $Region = $row['Region'];
      $TypeofSettlement = $row['TypeofSettlement'];
      $TheVillage = $row['TheVillage'];
      $Email = $row['Email'];
      $Class = $row['Class'];
      $School = $row['School'];
      $RegionOfSchool = $row['RegionOfSchool'];
      $CityOFSchool = $row['CityOfSchool'];
      $Subject = $row['Subject'];
      echo "<tr align=center><td>$number</td>";
      echo "<td>$Id</td>";
      echo "<td>$Surname</td>";
      echo "<td>$Name</td>";
      echo "<td>$MiddleName</td>";
      echo "<td>$Birthday</td>";
      echo "<td>$Sex</td>";
      echo "<td>$ContactPhone</td>";
      echo "<td>$HomePhone</td>";
      echo "<td>$Subject</td>";
      echo "<td>$Email</td>";
      echo "</tr>";
  }
  while ($row = mysql_fetch_array($result));
  ?>
  </table>
  </div>
</div>
</body>
</html>
