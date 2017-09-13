<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<html>
<head>
<title>Все пользователи</title>
<script src="/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <?  function universal_link_bar($page, $count, $pages_count, $show_link)
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
    // Вызов функции, для вывода ссылок на экран?>
  <script>
  $(document).ready(function() {
    $('select').material_select();
    $(".button-collapse").sideNav();
  });
  </script>
  <div id="header">
      <p id="title">Всероссийская олимпиада школьников "Миссия выполнима. Твое призвание - финансист!"</p>
      <p class="nav-wrapper" id="title1"><a class="left hide-on-med-and-down" href="main.php">Начало  ></a><a class="left hide-on-med-and-down" href="search.php">Главная</a></p>
      <p id="title2">Управление олимпиадой</p>
  </div>
<!--   <div class="row">

  <form name="search" method="post" action="namesearch.php">
      <input class="right hide-on-med-and-down col s6" type="search" name="word" placeholder="Поиск по фамилии">
      <i class="material-icons col s1">insert_chart</i></a>
  </form>
</div> -->
<div class="row">

</div>
  <form class="subject"  name="subject" method="post" action="subjectSearch.php" >
        Предмет олимпиады:
  <select name="subject">
        <option></option>
        <option>Экономика</option>
        <option>Математика</option>
        <option>Информатика</option>
        <option>Обществознание</option>
        <option>История</option>
      </select>&nbsp;&nbsp;&nbsp;&nbsp;
        Класс:
  <select name="classnum">
        <option></option>
        <option >8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
      </select>&nbsp;&nbsp;&nbsp;&nbsp;
      По номеру региона:
        <select id="region" name="region" cols="10">
        <option></option>
        <option>Алтайский край</option>
        <option>Амурская область</option>
        <option>Архангельская область</option>
      	<option>Астраханская область</option>
      	<option>Белгородская область</option>
      	<option>Брянская область</option>
      	<option>Владимирская область</option>
      	<option>Волгоградская область</option>
      	<option>Вологодская область</option>
      	<option>Воронежская область</option>
      	<option>г. Москва</option>
      	<option>Еврейская автономная область</option>
      	<option>Забайкальский край</option>
      	<option>Ивановская область</option>
      	<option>Иркутская область</option>
      	<option>Кабардино-Балкарская Республика</option>
      	<option>Калининградская область</option>
      	<option>Калужская область</option>
      	<option>Камчатский край</option>
      	<option>Карачаево-Черкесская Республика</option>
      	<option>Кемеровская область</option>
      	<option>Кировская область</option>
      	<option>Костромская область</option>
      	<option>Краснодарский край</option>
      	<option>Красноярский край</option>
      	<option>Курганская область</option>
      	<option>Курская область</option>
      	<option>Ленинградская область</option>
      	<option>Липецкая область</option>
      	<option>Магаданская область</option>
      	<option>Московская область</option>
      	<option>Мурманская область</option>
      	<option>Ненецкий автономный округ</option>
      	<option>Нижегородская область</option>
      	<option>Новгородская область</option>
      	<option>Новосибирская область</option>
      	<option>Омская область</option>
      	<option>Оренбургская область</option>
      	<option>Орловская область</option>
      	<option>Пензенская область</option>
      	<option>Пермский край</option>
      	<option>Приморский край</option>
      	<option>Псковская область</option>
      	<option>Республика Адыгея (Адыгея)</option>
      	<option>Республика Алтай</option>
      	<option>Республика Башкортостан</option>
      	<option>Республика Бурятия</option>
      	<option>Республика Дагестан</option>
      	<option>Республика Ингушетия</option>
      	<option>Республика Калмыкия</option>
      	<option>Республика Карелия</option>
      	<option>Республика Коми</option>
      	<option>Республика Крым</option>
      	<option>Республика Марий Эл</option>
      	<option>Республика Мордовия</option>
      	<option>Республика Саха (Якутия)</option>
      	<option>Республика Северная Осетия - Алания</option>
      	<option>Республика Татарстан (Татарстан)</option>
        <option>Республика Тыва</option>
        <option>Республика Хакасия</option>
        <option>Ростовская область</option>
      	<option>Рязанская область</option>
        <option>Самарская область</option>
      	<option>Санкт-Петербург</option>
      	<option>Саратовская область</option>
      	<option>Сахалинская область</option>
      	<option>Свердловская область</option>
      	<option>Севастополь</option>
      	<option>Смоленская область</option>
      	<option>Ставропольский край</option>
      	<option>Тамбовская область</option>
      	<option>Тверская область</option>
      	<option>Томская область</option>
      	<option>Тульская область</option>
      	<option>Тюменская область</option>
      	<option>Удмуртская Республика</option>
      	<option>Ульяновская область</option>
      	<option>Хабаровский край</option>
      	<option>Ханты-Мансийский автономный округ - Югра</option>
        <option>Челябинская область</option>
      	<option>Чеченская Республика</option>
      	<option>Чувашская Республика - Чувашия</option>
      	<option>Чукотский автономный округ</option>
      	<option>Ямало-Ненецкий автономный округ</option>
      	<option>Ярославская область</option>
      </select>
          <input style="width:70px;" type="text" id="regionvalue"/>
          <script>
      var elems = document.getElementById("region").options;
      var similar = function (A, B) {
        for (var i = 0; i < B.length; i++)
            if (A.charAt(i) != B.charAt(i)) break;
        return i;
      };
      document.getElementById("regionvalue").onkeypress = function (event) {
        var max = 0;
        for (var i = 0; i < elems.length; i++) {
            var A = elems[i].innerHTML.replace(/^\s+|\s+$/g, "").toLowerCase(),
            B = (this.value + String.fromCharCode(event.keyCode)).toLowerCase();
            if (similar(A, B) > max)
                elems[i].selected = "selected", max = similar(A, B);
        }
    };
    </script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input class="btn waves-effect waves-light" name="search1" type="submit" value="Искать" />
</form>
<?  echo "<div style='text-align:center'>";
    universal_link_bar($page, $count, $pages_count, 10);
      echo "</div>";
    ?>
<div class="row">
<div id="maintable" class="col s10">
<table class="container striped highlight responsive-table">
  <?php
mysql_query ("set_client='utf8'");//Следующие 4 строки решают проблему с кодировкой.
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");
$result = mysql_query('select * from profile limit '.$start_pos.', '.$perpage.'') or die('error!');
$row = mysql_fetch_assoc($result);
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
<?
$eight = mysql_query("SELECT * FROM profile WHERE Class='8'");
$eight1 = mysql_num_rows($eight);
$nine = mysql_query("SELECT * FROM profile WHERE Class='9'");
$nine1 = mysql_num_rows($nine);
$ten = mysql_query("SELECT * FROM profile WHERE Class='10'");
$ten1 = mysql_num_rows($ten);
$eleven = mysql_query("SELECT * FROM profile WHERE Class='11'");
$eleven1 = mysql_num_rows($eleven);
$num = mysql_query("SELECT * FROM profile");
$num1 = mysql_num_rows($num);
?>

<div id="information2" class="col s2">
  <form class="" method="post" action="namesearch.php">
    <label for="Email">Поиск по фамилии: <i class="material-icons">search</i></label>
    <input   class="" type="text" name="namesearch" value="" id="namesearch" class="validate"/>
    </form>
  <p id="bllock">Статистика регистрации</p>
  <table class="bordered" >
  <tr><td><b>Направление</td><td><b>Чел.</td></tr>
  <tr><td>Всего</td><td><?=$num1;?></td></tr>
  <tr><td>8 класс</td><td><?=$eight1;?></td></tr>
  <tr><td>9 класс</td><td><?=$nine1;?></td></tr>
  <tr><td>10 класс</td><td><?=$ten1;?></td></tr><tr>
  <td>11 класс</td><td><?=$eleven1;?></td></tr>
</table><br>
<a href="report1.php" class="waves-effect waves-light btn"><i class="material-icons left">assignment</i>Отчет</a>
</div>
</div>
</body>
</html>
