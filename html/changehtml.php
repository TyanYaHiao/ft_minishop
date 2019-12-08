#!/usr/bin/php
<?php
	function do_cars($name, $do){
		$fp = fopen('../private/cars.csv', 'r');
		while (($array[] = fgetcsv($fp))!= FALSE)
		if ($do == '+'){
			foreach ($array as &$value){
				if ($value[1] == $name){
					$value[2] = 1;
				}
			}
		}
		if ($do == '-'){
			foreach ($array as &$value){
				if ($value[1] == $name){
					$value[2] = 0;
				}
			}
		}
		print_r($array);
		fclose($fp);
		$fp = fopen('../private/cars.csv', 'w');
		foreach ($array as $fields) {
			fputcsv($fp, $fields);
		}
		fclose($fp);
	}
	
	if ($_POST)
