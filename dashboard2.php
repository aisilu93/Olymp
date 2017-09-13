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
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
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
    <div class="col s9 offset-s3">
<h2 class="thin grey-text text-darken-3 ">
Мотивационное письмо
</h2>
<div class="container">
<blockquote class="grey-text">
Для участия в отборочном этапе Олимпиады Вам необходимо написать Мотивационное письмо и загрузить соответствующий
файл в форму сбора. Мотивационное письмо составляется абитуриентом
в свободной форме с изложением оснований заинтересованности в обучении в магистратуре Финансового университета.
</blockquote>
<form action="#">
    <div class="file-field input-field">
      <div class="btn waves-effect waves-grey">
        <span>Загрузить</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Выберите файл">
      </div>
    </div>
  </form>
</div>
<h3 class="thin grey-text text-darken-3 ">
Список загруженных файлов
</h3>
<div class="container">
  <blockquote>
    <table class="responsive-table striped">
            <thead class="thin grey-text">
              <tr>
                  <th data-field="dateofloading">Дата загрузки</th>
                  <th data-field="nameoffile">Имя файла</th>
                  <th data-field="typeoffile">Тип файла</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>08.02.2017</td>
                <td>1.jpg</td>
                <td>Изображение</td>
              </tr>
              <tr>
            </tbody>
    </table>
    <br><br>
  </blockquote>
  <div id="motivation" class="right">
    <a class="waves-effect waves-light btn red darken-2" href="#modal1">Требования к письму</a>
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">

        <h4 class="center">МОТИВАЦИОННОЕ ПИСЬМО</h4>
        <h3 class="center">для отборочного этапа олимпиады
   «Магия магистратуры. Соедини науку и практику!»
  </h3>
    <div class="container">
        <p><p>ФИО: _______________________________________________________</p>
  <p>&nbsp;</p>
  <p>_____________________________________________________________________________</p>
  <p>&nbsp;</p>
  <p>Мотивационное письмо составляется поступающим в произвольной форме и имеет следующую структуру:</p>
  <p>&nbsp;</p>
  <p style="margin-left:28pt;">1.&nbsp;&nbsp;&nbsp;&nbsp; Вступление.</p>
  <p style="margin-left:28pt;">2.&nbsp;&nbsp;&nbsp;&nbsp; Цели и план профессионального развития, роль магистратуры Финуниверситета в достижении целей.</p>
  <p style="margin-left:28pt;">3.&nbsp;&nbsp;&nbsp;&nbsp; Достижения в выбранном направлении (имеющиеся научные исследования и потенциал их развития в магистратуре).</p>
  <p style="margin-left:28pt;">4.&nbsp;&nbsp;&nbsp;&nbsp; Профессиональные компетенции, которыми Вы планируете овладеть в университете и применить на практике.</p>
  <p style="margin-left:28pt;">5.&nbsp;&nbsp;&nbsp;&nbsp; Как программа, на которую Вы поступаете, поможет Вам развить соответствующие качества, навыки и знания и добиться обозначенных выше карьерных целей.</p>
  <p style="margin-left:28pt;">6.&nbsp;&nbsp;&nbsp;&nbsp; Чем Вы сможете быть интересны / полезны Финуниверситету и сокурсникам.</p>
  <p style="margin-left:28pt;">7.&nbsp;&nbsp;&nbsp;&nbsp; Заключение.</p>
  </p>
      </div>
    </div>
  </div>
  </div>
</div>

</div>
</div>
</main>
<footer style="height:10%" class="page-footer grey lighten-2">
  <a class="grey-text right condenced light italic" href="http://www.fa.ru/dep/olimpcenter/Pages/default.aspx">Центр организации олимпиад и профессиональной ориентации
  </a>
</footer>

</body>
</html>
