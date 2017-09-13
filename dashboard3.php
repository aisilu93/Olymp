<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<html>
<head>
<title>Личный кабинет</title>
<script src="js/jquery-2.1.1.js" type="text/javascript"></script>
<script src="js/materialize.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
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
    <div class="col s9 offset-s3">
      <h2 class="thin grey-text text-darken-3 ">
        Выбор направления подготовки
      </h2>
      <h3 class="thin grey-text text-darken-3 ">
        (не более трех)
      </h3>
        <div class="container">
        <div class="card col s10">
          <div class="container">
          <div class="card-content">
            <form action="#">
    <p>
      <input type="checkbox" id="test1" />
      <label for="test1">Экономика</label>
    </p>
    <p>
      <input type="checkbox" id="test2" />
      <label for="test2">Финансы и кредит</label>
    </p>
    <p>
      <input type="checkbox" id="test3" />
      <label for="test3">Менеджмент</label>
    </p>
    <p>
      <input type="checkbox" id="test4" />
      <label for="test4">ГМУ</label>
    </p>
    <p>
      <input type="checkbox" id="test5" />
      <label for="test5">Юриспруденция</label>
    </p>
    <p>
      <input type="checkbox" id="test6" />
      <label for="test6">Социология</label>
    </p>
     <p>
        <input type="checkbox" id="test7" />
        <label for="test7">Политология</label>
      </p>
      <p>
          <input type="checkbox" id="test8" />
          <label for="test8">Информационные технологии</label>
        </p>
      </form>
          </div>
</div>
        </div>
          <a class="waves-effect waves-light btn">Сохранить выбор</a>&nbsp
        </div>
      </div>
    </div>
</main>
<footer style="height:10%" class="page-footer grey lighten-2">
  <a class="grey-text right" href="http://www.fa.ru/dep/olimpcenter/Pages/default.aspx">Центр организации олимпиад и профессиональной ориентации
  </a>
</footer>

</body>
</html>
