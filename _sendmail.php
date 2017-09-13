<?php //session_start();
function genPsw($length = 6){
  $chars = '0123456789';  // abdefhiknrstyzABDEFGHKNQRSTYZ
  $numChars = strlen($chars);
  $string = '';
  for ($i = 0; $i < $length; $i++) {
    $string .= substr($chars, rand(1, $numChars) - 1, 1);
  }
  return $string;
}
?>
<form><input type='button' value='Закрыть окно' onclick = 'window.close()' class='b2'></form>
<?php
	$login = genPsw(5);
	$password = genPsw(3);  
	$email = $_REQUEST['login'];
	if (empty($email)){echo "Не задан email"; return;}
	//$email = "levchern@gmail.com";
	include ("connect.php");
	$msg = "Ваш ID = $login \r\n пароль = $password";
//Ваш ID = 04054 
//пароль = 586
	if (!empty($email)){
		//echo "<BR>  ".$email;	
		$kr = mail($email, 'message', $msg);
		if($kr){
			echo "<br>Почта отправлена";
			$msg1 = "<br>Ваш ID = $login <br> пароль = $password";
			echo $msg1;
			$query = "INSERT INTO users(login,password) VALUES ('$login', '$password')";
			mysql_query($query) or die(mysql_error());
			
		}else{
			echo "<br>Почта не отправлена";
		}
	}

?>