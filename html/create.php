<?php
	$array = [];
	
	if (!($_POST['passwd']) || !($_POST['login']) || !($_POST['submit'] == 'OK')) {
		include('login.html');
	}
	
	if (!($array = unserialize(file_get_contents("../private/passwd")))){
		$array[] = [
			"login" => $_POST['login'],
			"passwd" => hash("whirlpool", $_POST['passwod'])
		];
		file_put_contents("../private/passwd", serialize($array));
		include('login.html');
		exit();
	}
	foreach ($array as $value)
	{
		if ($value["login"] == $_POST["login"]) {
			echo "ERROR\n";
			include('login.html');
			exit ();
		}
	}
	$array[] = [
		"login" => $_POST['login'],
		"passwd" => hash("whirlpool", $_POST['passwod'])
	];
	file_put_contents("../private/passwd", serialize($array));
	echo "OK\n";
	include('login.html');