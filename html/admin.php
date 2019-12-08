<?php
	if (!($_POST['login']) || !($_POST['submit'] == 'Delete user')) {
		include('admin.html');
		exit();
	}
	$array = unserialize(file_get_contents("../private/passwd"));
//	$result=array_search($_POST['login'],$array,true);
//	if($result !== false) {
//		unset($array[$result]);
//	}
	foreach ($array as &$value)
	{
		if ($value["login"] == $_POST["login"]) {
			unset($value);
		}
	}
	file_put_contents("../private/passwd", serialize($array));
	include('admin.html');
	exit();
