<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<html>
<head>
<title>Все пользователи</title>
<script src="/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
</head>
<body>
  <script>
  $(document).ready(function() {
    $('select').material_select();
    $(".button-collapse").sideNav();
  });
  </script>
  <div id="header">
      <p id="title">Всероссийская олимпиада школьников "Миссия выполнима. Твое призвание - финансист!"</p>
      <p class="nav-wrapper" id="title1"><a class="left hide-on-med-and-down" href="main.php">Начало ></a><a class="left hide-on-med-and-down" href="viewallusers.php">Все участники</a></p>
      <p id="title2">Управление олимпиадой</p>
  </div>
  <?php
  mysql_query ("set_client='utf8'");//Следующие 4 строки решают проблему с кодировкой.
  mysql_query ("set character_set_results='utf8'");
  mysql_query ("set collation_connection='utf8_general_ci'");
  mysql_query ("SET NAMES utf8");
  function universal_link_bar($page, $count, $pages_count, $show_link)
  {
  if ($pages_count == 1) return false;
  $sperator = ''; // Разделитель ссылок; например, вставить "|" между ссылками
  // Для придания ссылкам стиля
  $style = 'style="color: #808000; text-decoration: none;"';
  $begin = $page - intval($show_link / 2);
  unset($show_dots); // На всякий случай :)
  // Сам постраничный вывод
  // Если количество отображ. ссылок больше кол. страниц
  if ($pages_count <= $show_link + 1) $show_dots = 'no';
  // Вывод ссылки на первую страницу
  if (($begin > 2) && !isset($show_dots) && ($pages_count - $show_link > 2)) {
  echo '<a '.$style.' href='.$_SERVER['php_self'].'?page=1> < </a> ';
  }

  for ($j = 0; $j < $page; $j++) {
  // Если страница рядом с концом, то выводить ссылки перед идущих для того,
  // чтобы количество ссылок было постоянным
  if (($begin + $show_link - $j > $pages_count) && ($pages_count-$show_link + $j > 0)) {
  $page_link = $pages_count - $show_link + $j; // Номер страницы
  // Если три точки не выводились, то вывести
  if (!isset($show_dots) && ($pages_count-$show_link > 1)) {
  echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.($page_link - 1).'><b>...</b></a> ';
  // Задаем любое значение для того, чтобы больше не выводить в начале "..." (три точки)
  $show_dots = "no";
  }
  // Вывод ссылки
  echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.$page_link.'>'.$page_link.'</a> '.$sperator;
  } else continue;
  }
  for ($j = 0; $j <= $show_link; $j++) // Основный цикл вывода ссылок
  {
  $i = $begin + $j; // Номер ссылки
  // Если страница рядом с началом, то увеличить цикл для того,
  // чтобы количество ссылок было постоянным
  if ($i < 1) {
  $show_link++;
  continue;
  }
  // Подобное находится в верхнем цикле
  if (!isset($show_dots) && $begin > 1) {
  echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.($i-1).'><b>...</b></a> ';
  $show_dots = "no";
  }
  // Номер ссылки перевалил за возможное количество страниц
  if ($i > $pages_count) break;
  if ($i == $page) {
  echo ' <a '.$style.' ><b>'.$i.'</b></a> ';
  } else {
  echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.$i.'>'.$i.'</a> ';
  }
  // Если номер ссылки не равен кол. страниц и это не последняя ссылка
  if (($i != $pages_count) && ($j != $show_link)) echo $sperator;
  // Вывод "..." в конце
  if (($j == $show_link) && ($i < $pages_count)) {
  echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.($i+1).'><b>...</b></a> ';
  }
  }
  // Вывод ссылки на последнюю страницу
  if ($begin + $show_link + 1 < $pages_count) {
  echo ' <a '.$style.' href='.$_SERVER['php_self'].'?page='.$pages_count.'> > </a>';
  }
  return true;
  } // Конец функции

  // Подготовка к постраничному выводу
  $perpage = 30; // Количество отображаемых данных из БД
  if (empty($_GET['page']) || ($_GET['page'] <= 0)) {
  $page = 1;
  } else {
  $page = (int) $_GET['page']; // Считывание текущей страницы
  }
  // Общее количество информации
  $count = mysql_numrows(mysql_query('select * from profile')) or die('error! Записей не найдено!');
  $pages_count = ceil($count / $perpage); // Количество страниц
  // Если номер страницы оказался больше количества страниц
  if ($page > $pages_count) $page = $pages_count;
  $start_pos = ($page -1) * $perpage; // Начальная позиция, для запроса к БД
  // Вызов функции, для вывода ссылок на экран
echo "<div style='text-align:center'>";
  universal_link_bar($page, $count, $pages_count, 10);
echo "<br></div>";?>
<div class="row">
<div id="maintable" class="col s12">
<table class="container striped responsive-table highlight">
<?
echo "<tr class=card-panel teal lighten-2  align=center>";
echo "<th>№</th>";
echo "<th>ID</th>";
echo "<th>Фамилия</th>";
echo "<th>Имя</th>";
echo "<th>Отчество</th>";
echo "<th style='width: 100px'>Дата рождения</th>";
echo "<th>Пол</th>";
echo "<th>Кон.телефон</th>";
echo "<th>Дом.телефон</th>";
echo "<th>Email</th>";
echo "<th>Страна</th>";
echo "<th>Регион</th>";
echo "<th>Тип нас.пункта</th>";
echo "<th>Наименование</th>";
echo "<th>Класс</th>";
echo "<th>Наим.обр.организации</th>";
echo "<th>Регион</th>";
echo "<th>Субъект</th>";
echo "<th>Предметы олимпиады </th>";
echo "</tr>";
$result = mysql_query('select * from profile limit '.$start_pos.', '.$perpage.'') or die('error!');
$number = 0;
while ($row = mysql_fetch_array($result))
 {
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
    $DateOfRegistration = $row['DateOfRegistration'];
    echo "<tr align=center><td>$number</td>";
    echo "<td>$Id</td>";
    echo "<td>$Surname</td>";
    echo "<td>$Name</td>";
    echo "<td>$MiddleName</td>";
    echo "<td>$Birthday</td>";
    echo "<td>$Sex</td>";
    echo "<td>$ContactPhone</td>";
    echo "<td>$HomePhone</td>";
    echo "<td>$Email</td>";
    echo "<td>$Nationality</td>";
    echo "<td>$Region</td>";
    echo "<td>$TypeofSettlement</td>";
    echo "<td>$TheVillage</td>";
    echo "<td>$Class</td>";
    echo "<td>$School</td>";
    echo "<td>$RegionOfSchool</td>";
    echo "<td>$CityOFSchool </td>";
    echo "<td>$Subject</td>";
    echo "</tr>";
}
?>
</table>
</div>
</div>
</body>
</html>
