<?php
	include "auth.php";
	session_start();
	if (($_POST['login'] && $_POST['passwd']) && auth($_POST['login'], $_POST['passwd']))
	{
		echo "OK\n";
		$_SESSION['loggued_on_user'] = $_POST['login'];
		include ("");
		exit;
	}
	else if (($_POST['login'] && $_POST['passwd']))
	{
		echo "ERROR\n";
		include ('loginagain.html');
		exit;
	}
?>
