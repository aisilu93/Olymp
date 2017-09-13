<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<html>
<head>
<title>Анкета участника</title>
<script  src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
<script src="/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
</head>
<body>

  <div id="header">
      <p id="title">Всероссийская олимпиада школьников "Миссия выполнима. Твое призвание - финансист!"</p>
      <p class="nav-wrapper" id="title1"><a class="left hide-on-med-and-down" href="main.php">Начало  ></a><a class="left hide-on-med-and-down" href="search.php">Список участников</a></p>
      <p id="title2">Управление олимпиадой</p>
  </div>
  <div id="wrap">
		<p>Анкета участника</p>
		<div id='form_wrap' class="row" >
  			<form id="contact-form"  method="POST" action="reg.php" onSubmit="return ValidateForm(this)" >
		  	<label for="Email">Email : </label>
				<input   type="text" name="Email" value="" id="Email" class="validate"/>
				<label for="Surname">Фамилия: </label>
				<input type="text"  name="Surname" value="" id="Surname" class="validate"/>
        <label for="Name">Имя: </label>
        <input type="text"  name="Name" value="" id="Name" class="validate"/>
				<label for="MiddleName">Отчество </label>
				<input type="text"  name="MiddleName" value="" id="MiddleName"class="validate" />
        <label for="Birthday">Дата рождения </label>
				<input type="text"  name="Birthday" value="" id="Birthday" class="validate"/>
        <label for="Sex">Пол </label>
        <input type="text" name="Sex" value="" id="Sex" class="validate" />
        <label for="ContactPhone">Контактный телефон </label>
        <input type="text" name="ContactPhone" value="" id="ContactPhone" class="validate"/>
        <label for="HomePhone">Домашний телефон </label>
        <input type="text" name="HomePhone" value="" id="HomePhone" class="validate"/>
        <label for="Privileges1">Относитесь ли вы к категории: Дети-сироты, оставшиеся без попечения родителей </label>
        <input type="checkbox" name="Privileges1"  value="1" id="Privileges1" /><br>
        <label for="Privileges3">Дети, с ограниченными возможностями </label>
        <input type="checkbox" name="Privileges2"  value="1" id="Privileges2" /><br>Данные о месте проживания<br>
        <label for="Nationality">Страна, гражданином которой вы являетесь(Гражданство) </label>
        <input type="text" name="Nationality" value="" id="Nationality" />
        <label for="Region">Субъект по паспорту (Регион) </label>
        <input type="text" name="Region" value="" id="Region" />
        <label for="TypeOfSettlement">Тип населенного пункта, в котором Вы зарегистрированы постоянно </label>
        <input type="text" name="TypeOfSettlement" value="" id="TypeOfSettlement" />
        <label for="TheVillage">Наименование населенного пункта, в котором Вы зарегистрированы постоянно </label>
        <input type="text" name="TheVillage" value="" id="TheVillage" /><br>Данные о вашей школе:<br>
        <label for="Class">Класс </label>
        <input type="text" name="Class" value="" id="Class" />
        <label for="School">Наименование образовательной организации </label>
        <input type="text" name="School" value="" id="School" />
        <label for="RegionOfSchool">Регион, где находится Ваша школа </label>
        <input type="text" name="RegionOfSchool" value="" id="RegionOfSchool" />
        <label for="CityOfSchool">Субъект, где находится Ваша школа </label>
        <input type="text" name="CityOfSchool" value="" id="CityOfSchool" />
        <label for="RegionOfSchool">Регион, где находится Ваша школа </label>
        <input type="text" name="RegionOfSchool" value="" id="RegionOfSchool" />
        <label for="Subject">Выберете предмет: </label>
        <input name="Subject" type="checkbox" value="">Информатика<br>
        <input name="Subject" type="checkbox" value="">Экономика<br>
        <input name="Subject" type="checkbox" value="">Математика<br>
          <input name="Subject" type="checkbox" value="">История<br>
            <input name="Subject" type="checkbox" value="">Обществознание<br>
			  <input type="submit" name ="submit" value="Сохранить" onclick="" />

			</form>
		</div>
	</div>
