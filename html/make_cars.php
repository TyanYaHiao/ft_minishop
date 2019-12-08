#!/usr/bin/php
<?php
	
	$cars = array (
		array(1, 'A1', 1),
		array(2, 'A3', 1),
		array(3, 'A4', 1),
		array(4, 'A5', 1),
		array(5, 'A6', 1),
		array(6, 'A7', 1),
		array(7, 'A8', 1),
		array(8, 'TT', 1),
		array(9, 'Q3', 1),
		array(10, 'Q7', 1),
		array(11, 'Q8', 1),
		array(12, 'RS6', 1),
		array(13, 'RS7', 1),
		array(14, 'TTRS', 1),
	);
	
	$fp = fopen('../private/cars.csv', 'w');
	
	foreach ($cars as $fields) {
		fputcsv($fp, $fields);
	}
	
	fclose($fp);
?>
