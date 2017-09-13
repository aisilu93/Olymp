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
Техническая поддержка
</h2>
<div class="row">
<div class="card col s8">
                        <div class="card-content ">
                            <span class="card-title">Сообщение для администрации</span>
                            <form class="m-t-md">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="first_name" type="text" class="validate">
                                        <label for="first_name">Тема</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="message" class="materialize-textarea"></textarea>
                                        <label for="message">Текст сообщения</label>
                                    </div>
                                    <div class="input-field col s12">
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
                                </div>
                            </form>
                        </div>
                      </div>
<div class="col s3 right">
    <div class="card">
        <div class="card-content ">
          <span class="card-title">Контакты</span>
          <address>
            olymp@fa.ru<br>
          <abbr title="Phone">Тел:</abbr> +7 (499) 943-94-06
          <strong>Техническая поддержка:</strong> <br>
          RDHohlov@fa.ru​​​​<br>
          </address>
        </div>
    </div>
    <blockquote class="grey-text">
    Поле <b>Прилагаемый к сообщению файл</b> не является обязательным, но если Вы хотите приложить к сообщению файл, Вы можете это сделать.
      Администрация обязательно получит ваше сообщение и ответит Вам по указанному Вами адресу электронной почты.>
    </blockquote>
  </div>
</div>

<div class="container">

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
