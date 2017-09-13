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
<script src="js/mainfortimeline.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="css/stylefortimeline.css"  media="screen,projection"/>
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
        Календарь
      </h2>
      <div class="">
        <section id="cd-timeline" class="cd-container">
        <div class="cd-timeline-block">
        <div class="cd-timeline-img" style="background:#3E1E63">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
        <span class="indigo-text text-darken-1 right">Регистрация участников олимпиады</span>
        <span class="cd-date">15 октября 2016 года –
        10 февраля 2017 года</span>
        </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

        <div class="cd-timeline-block">
        <div class="cd-timeline-img" style="background:#3E1E63">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
        <h2>Проведение олимпиадных состязаний  в Финансовом университете</h2>
        <p class="indigo-text text-darken-1 right"> Юриспруденция, Социология, Информационные технологии</p>
        <span class="cd-date">17 февраля, 10:00 - 12:30</span><br>
        </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

        <div class="cd-timeline-block">
        <div class="cd-timeline-img is-hidden" style="background:#3E1E63">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content is-hidden">
        <p class="indigo-text text-darken-1 right">Финансы и кредит</p>
        <span class="cd-date">17 февраля, 14:00 - 16:30</span>
        </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

        <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-location is-hidden" style="background:#3E1E63">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content is-hidden">
        <p class="indigo-text text-darken-1">Экономика</p>
        <span class="cd-date">18 февраля, 10:00 - 12:30</span>
        </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

        <div class="cd-timeline-block">
        <div class="cd-timeline-img is-hidden" style="background:#3E1E63">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content is-hidden">
        <p class="indigo-text text-darken-1 right">Политология, ГМУ</p>
        <span class="cd-date">18 февраля, 14:00 - 16:30</span>
        </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

        <div class="cd-timeline-block">
        <div class="cd-timeline-img is-hidden" style="background:#3E1E63">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content is-hidden">
        <p class="indigo-text text-darken-1 ">Менеджмент</p>
        <span class="cd-date">19 февраля, 10:00 - 12:30 </span>
        </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

        <div class="cd-timeline-block">
        <div class="cd-timeline-img is-hidden" style="background:#3E1E63">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content is-hidden">
        <p class="indigo-text text-darken-1 right">Церемония награждения победителей олимпиады</p>
        <span class="cd-date">Дата, время и место будут опубликованы позднее </span>
        </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->
        </section>

      </div>
    </div>
    </div>
</main>
<footer style="height:10%" class="page-footer grey lighten-2">
  <a class="grey-text right light italic" href="http://www.fa.ru/dep/olimpcenter/Pages/default.aspx">Центр организации олимпиад и профессиональной ориентации
  </a>
</footer>

</body>
</html>
