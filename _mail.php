<?php  // 	
	header("Content-Type: text/html; charset=UTF-8"); 
	$msg = "1124 235235";
	echo $msg;
	$email = "levchern@gmail.com";
	if (!empty($email)){
		echo "<BR>  ".$email;	
		$kr = mail($email, 'message', $msg);
		echo "<br>$kr";
	}
	return;
?>