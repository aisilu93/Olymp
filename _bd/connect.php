
<?php
//$host = "mysql.hostinger.ru";
//$user = "u231664305_chern";
//$password = "GcuTTe2xLApC";
//$ndbase = "u231664305_labd";

      $dblocation = "mysql.hostinger.ru";
      $dbname = "u231664305_labd";
      $dbuser = "u231664305_chern";
      $dbpasswd = "22OPX4DrYZLg";
      $dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
      if (!$dbcnx){
		echo( "<P> В настоящий момент сервер базы данных не доступен, поэтому корректное отображение страницы невозможно. </P>" );
		exit();
      }
      if (!@mysql_select_db($dbname, $dbcnx)){
        echo( "<P> В настоящий момент база данных не доступна, поэтому корректное отображение страницы невозможно. .</P>" );
        exit();
      }

      ?>
