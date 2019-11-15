<?php
	session_start();
	$name = $_POST['name0'];
	$image = $_POST['name1'];
	$price = $_POST['name2'];
	$quantity = $_POST['name3'];
	$event = $_POST['event'];

	$products = array($name,$image,$price,$quantity);

	if ($event == 'Update') {
		$_SESSION[$name]=$products;
	}
	else if($event == 'Delete'){
		unset($_SESSION[$name]);
	}

	header("location: ../viewcart.php");