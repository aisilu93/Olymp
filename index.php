<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<html>
<head>
<title>Главная</title>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="js/jquery-2.1.1.js" type="text/javascript"></script>
<script src="js/materialize.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="css/styleforindex.css"  media="screen,projection"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body background='images/background.jpg'>
  <div class="row">
          <div class="navbar-fixed col s12">
          <nav>
              <div class="nav-wrapper teal darken-3">
                  <a href="http://fa.ru/" class="brand-logo"><i class="material-icons">home</i>Система кафедры</a>
                  <ul class="right hide-on-med-and-down">
                      <li><a href="#!"></a></li>
                      <li><a href="#!"></a></li>
                  </ul>
              </div>
          </nav>
      </div>
  </div>
  <section data-section="one" id="one" class="section nav_item">
  <div class="row">
  <div style="background-color:rgba(27,111,101,0.3)" class="card hoverable col s8 offset-s2 z-depth-5">
    <div class="card-title" style="padding:10px">
    <p class="white-text center-align">  Приветствуем Вас на официальном сайте Всероссийской открытой олимпиады для студентов и выпускников вузов
      <br>«Магия магистратуры.
         Соедини науку и практику!».</p>
    </div>
<div class="card-content"><span style="padding:10px" class="white-text">
<p class="center-align">Желающие принять участие в олимпиаде должны обязательно <a href="#two" class="nav_item_link collection-item white-text"><b>зарегистрироваться.</b></a><br>
Регистрация откроется в октябре 2016 года.</p>
<p class="center-align">Победителям и призерам олимпиады по решению Ученого совета Финансового университета
могут быть предоставлены льготы и скидки при поступлении для обучения по программам магистратуры.</p></span></div>
</div>
</div>
<a href="#two" class="nav_item_link scroll-down radius"></a>
</section>

<section data-section="two" id="two" class="section">
  <div class="container" style="margin-top:5%">
    <div class="row">
        <div class="left col s4">
                <blockquote class="yellow-text">
Если у Вас возникли проблемы технического характера,
пожалуйста, свяжитесь с нами по контактам, указанным на странице <b>"Техподдержка"</b>
      </blockquote>
    </div>
        <div style="background-color:rgba(0,0,0,0.6)" class="card right hoverable col s5" >
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width tabs-transparent">
                    <li class="tab"><a href="#registration">Регистрация</a></li>
                    <li class="tab"><a href="#enter">Вход</a></li>
                </ul>
              </div>
                <div class="card-content">
                  <div id="enter">
                  <form action="testreg.php" method="post">
                    <br><br>
                      <input placeholder="Email" name="login" type="text" size="15" maxlength="15">
                      <input placeholder="Пароль" name="password" type="password" size="15" maxlength="15">
                      <div>
                    <br>
                    <input class="btn waves-effect waves-light" type="submit" name="submit" value="Войти">&nbsp &nbsp
                    <a class="btn-small disabled" href="">Забыли пароль?</a>
                  </div>
                </form>
                </div>
                  <div id="registration" class="white-text">
                  <p>Для регистрации укажите <B>адрес</b> электронной почты - по этому адресу Вы получите подтверждение регистрации. <br>
                    После чего Вы сможете перейти к заполнению анкеты и получить доступ в Личный кабинет. <br>
                  </p><br>
				  <form action='_sendmail.php' target='_blank'> 
					<input placeholder="Email" id="name" name="login" type="text" size="15" maxlength="20">
                    <div class="">
                      <input class="waves-effect waves-light btn" type="submit">Регистрация</a>
                    </div>
				   </form>	
                </div>
              </div>
            </div>
      </div>
  </div>
</section><!-- cd-section -->
</body>
</html>
