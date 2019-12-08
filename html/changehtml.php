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
	if ($_POST['A1'] == 'Add to cart'){
	    do_cars('A1', '-');
	    include ('index.php');
	    exit();
    }
	if ($_POST['A3'] == 'Add to cart'){
		do_cars('A3', '-');
		include ('index.php');
		exit();
	}
	if ($_POST['A4'] == 'Add to cart'){
		do_cars('A4', '-');
		include ('index.php');
		exit();
	}if ($_POST['A5'] == 'Add to cart'){
	do_cars('A5', '-');
	include ('index.php');
	    exit();
	}
	if ($_POST['A6'] == 'Add to cart'){
	do_cars('A6', '-');
	include ('index.php');
	    exit();
	}
	if ($_POST['A7'] == 'Add to cart'){
		do_cars('A7', '-');
		include ('index.php');
	    exit();
	}
	if ($_POST['A8'] == 'Add to cart'){
		do_cars('A8', '-');
		include ('index.php');
	    exit();
	}if ($_POST['TT'] == 'Add to cart'){
	do_cars('TT', '-');
	include ('index.php');
	    exit();
	}
	if ($_POST['Q3'] == 'Add to cart'){
	do_cars('Q3', '-');
	include ('index.php');
	    exit();
	}
	if ($_POST['Q7'] == 'Add to cart'){
	do_cars('Q7', '-');
	include ('index.php');
	    exit();
	}
	if ($_POST['Q8'] == 'Add to cart'){
		do_cars('Q8', '-');
		include ('index.php');
	    exit();
	}
	if ($_POST['RS6'] == 'Add to cart'){
		do_cars('RS6', '-');
		include ('index.php');
	    exit();
	}
	if ($_POST['RS7'] == 'Add to cart'){
		do_cars('RS7', '-');
		include ('index.php');
	    exit();
	}
	if ($_POST['TTRS'] == 'Add to cart'){
		do_cars('TTRS', '-');
		include ('index.php');
	    exit();
	}
	
