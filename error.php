<?php defined('index') or die('Error 404'); $_SESSION['errorauth']++ ?>
<center><img src="template/error.png" width="150px"><br>
<h2><? echo $_GET['message']; ?></h2>
<center>