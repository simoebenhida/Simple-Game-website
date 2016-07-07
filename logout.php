<?php
	session_start();
	session_unset();
	session_destroy();
	header('Location: index.php');
	setcookie('email','');
	setcookie('passe','');
	exit();
?>