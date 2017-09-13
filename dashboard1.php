<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<html>
<head>
<title>Личный кабинет</title>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="js/jquery-2.1.1.js" type="text/javascript"></script>
<script src="js/materialize.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<script>
  </script>
<style>
footer, nav, header, section, aside, main {display: block}
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
  </style>
<body>
  <header>
  <div class="row">
          <div class="navbar-fixed">
          <nav>
              <div class="nav-wrapper teal darken-3">
                  <a href="dashboard.php" class="brand-logo right">Личный кабинет</a>
              </div>
          </nav>
      </div>
  </div>
<div class="container">
  <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0%);">
    <li><div class="userView">
      <div class="background">
        <img class="responsive-img" src="images/office.png">
      </div>

      <a href="#!photo"><img src="images/account_circle.png" class="circle responsive-img"></a>
      <a href="#!name"><span class="black-text name">Бурова Вера (ID: 001)</span></a>
      <a href="#!email"><span class="black-text email">VIBurova@fa.ru</span></a>
      </div></li>
          <li class="no-padding">
            <li class="bold"><span class="badge">Править</span>
              <a href="dashboard1.php" onclick="document.getElementById('global').submit()" class="waves-effect waves-teal">
                <i class="material-icons">create</i>Анкета</a>
            </li>
            <li><div class="divider"></div></li>
            <ul class="collapsible collapsible-accordion">
              <li class="bold"><a href="dashboard3.php" onclick="document.getElementById('global').submit()" class="collapsible-header  waves-effect waves-teal">Выбрать направление олимпиады</a>
              </li>
              <li class="bold"><a href="dashboard2.php" onclick="document.getElementById('global').submit()" class="collapsible-header  waves-effect waves-teal">Загрузить мотивационное письмо</a>
              </li>
              <li class="bold active"><a href="dashboard4.php" onclick="document.getElementById('global').submit()"class="collapsible-header waves-effect waves-teal">Календарь олимпиады</a>
              </li>
              <li class="bold"><a href="dashboard5.php" onclick="document.getElementById('global').submit()" class="waves-effect waves-teal"><i class="material-icons">warning</i>Техническая поддержка</a></li>
        </ul>
        </ul>
</div>
  <!-- Page Layout here -->
</header>
<main>
  <div class="row">
    <div class="col s8 offset-s3">
      <h2 class="thin grey-text text-darken-3 ">Анкета участника</h2>
      <div class="card">
        <div class="card-content">
      <form action="#" novalidate="novalidate">
                          <section id="" aria-hidden="false">
                    <div class="row">
                        <div class="col m6">
                              <div class="row">
                                    <div class="input-field col m6 s12">
                                      <label for="Surname">Фамилия: </label>
                              				<input type="text"  name="Surname" value="" id="Surname" class="validate"/>
                                    </div>
                                    <div class="input-field col m4 s12 right">
                                      <label for="Name">Имя: </label>
                                      <input type="text"  name="Name" value="" id="Name" class="validate"/>
                                    </div>
                                    <div class="input-field col m6 s12">
                                      <label for="Email">Email : </label>
                              				<input   type="text" name="Email" value="" id="Email" class="validate"/>
                                    </div>
                                    <div class="input-field col m4 s12 right">
                                     <label for="DateOfRegistration">Дата регистрации</label>
                                      <input type="text"id="DateOfRegistration"name="DateOfRegistration" value="" class="validate">
                                    </div>
                                    <div class="input-field col m6 s12">
                                                                            <label for="Birthday">Дата рождения </label>
                    <!--TODO КАЛЕНДАРЬ!!!!!!!!!!! МАСОЧКИ
                    jquery.inputmask is a jquery plugin which create an input mask.
                    An inputmask helps the user with the input by ensuring a predefined format.
                    This can be usefull for dates, numerics, phone numbers.-->
                              				<input type="text"  name="Birthday" value="" id="Birthday" class="validate"/>
                                    </div>
                                    <div class="col m4 s12 right">
                                      <br>
                                      <label for="Sex">Пол</label>
                                        <select name="Sex" id="Sex">
                                          <option value="" disabled selected></option>
                                          <option value="1">Женский</option>
                                          <option value="2">Мужской</option>
                                        </select>

                                    </div>
                                    <div class="input-field col s11">
                                      <label for="ContactPhone">Контактный телефон </label>
                                      <input type="text" name="ContactPhone" value="" id="ContactPhone" class="validate"/>
                                    </div>
                                    <div class="input-field col s11">
                                    <label for="HomePhone">Домашний телефон </label>
                                    <input type="text" name="HomePhone" value="" id="HomePhone" class="validate"/>
                                  </div>
                                </div>
                              </div>
                                  <div class="col m6">
                                    <div class="row">
                                          <div class="input-field col s10">
                                            <label for="MiddleName">Отчество: </label>
                                            <input type="text"  name="MiddleName" value="" id="MiddleName"class="validate" />
                                          </div>
                                          <div style="visibility: hidden" class="input-field col m6 s10">
                                            <label for=""></label>
                                            <input type="text" name="" value="" id="" />
                                          </div>
                                          <div class="input-field col s10">
                                            <label for="Region">Регион постоянного проживания</label>
                                            <input type="text" name="Region" value="" id="Region" />
                                          </div>
                                          <div class="input-field col m5 s10">
                                            <label for="TypeOfSettlement">Тип нас. пункта</label>
                                            <input type="text" name="TypeOfSettlement" value="" id="TypeOfSettlement" />
                                          </div>
                                          <div class="input-field col m5 s10 right">
                                            <label for="TheVillage">Населенный пункт</label>
                                            <input type="text" name="TheVillage" value="" id="TheVillage" />
                                          </div>
                                          <div style="visibility: hidden" class="input-field col m6 s10">
                                            <label for=""></label>
                                            <input type="text" name="" value="" id="" />
                                          </div>
                                    </div>
                                  </div>
                                <div class="col m6">
                                    <div class="row">
                                      <div class="input-field col s11">
                                        <label for="School">Полное название вашего ВУЗа </label>
                                        <input type="text" name="School" value="" id="School" />
                                      </div>
                                      <div class="col m7 s12">
                                        <br>
                                        <label for="Level">Уровень подготовки</label>
                                        <select name="Level" id="Level">
                                          <option value="" disabled selected></option>
                                          <option value="Bachelor">Бакалавр</option>
                                          <option value="Magister">Магистр</option>
                                          <option value="Specialty">Специалист</option>
                                        </select>
                                      </div>
                                      <div class="input-field col m4 s12">
                                        <label for="speciality">Направление</label>
                                        <input type="text" name="speciality" value="" id="speciality" />
                                      </div>
                                      <div class="input-field col s11">
                                        <label for="RegionOfSchool">Регион, где находится Ваш ВУЗ </label>
                                        <input type="text" name="RegionOfSchool" value="" id="RegionOfSchool" />
                                      </div>
                                      <div class="input-field col s11">
                                        <label for="CityOfSchool">Субъект, где находится Ваш ВУЗ </label>
                                        <input type="text" name="CityOfSchool" value="" id="CityOfSchool" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col m6">
                                    <div class="row">
                                      <div class="input-field col m5 s10">
                                        <label for="School_short">Сокращенное название</label>
                                        <input type="text" name="School_short" value="" id="School_short" />
                                      </div>
                                      <div class="col s10">
                                        <br>
                                        <label for="Class">Курс</label>
                                        <select name="Class" id="Class">
                                          <option value=""disabled selected></option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                        </section>
                </form>
              </div>
            </div>
            <form action="#">
    <p>
      <input type="checkbox" id="agree1" />
      <label for="agree1">Я даю свое согласие на обработку персональных данных</label>
    </p>
    <p>
      <input type="checkbox" id="agree2" />
      <label for="agree2">Я подтверждаю достоверность предоставленных данных</label>
    </p>
    <a class="waves-effect waves-light btn">Отправить заявку</a>&nbsp
    <a class="">Отмена</a>
  </form>
          </div>
        </div>
</main>
<footer style="height:10%" class="page-footer grey lighten-2">
  <a class="grey-text text right" href="http://www.fa.ru/dep/olimpcenter/Pages/default.aspx">Центр организации олимпиад и профессиональной ориентации
  </a>
</footer>
</body>
</html>
