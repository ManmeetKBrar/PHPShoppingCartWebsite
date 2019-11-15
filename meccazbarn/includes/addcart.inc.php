<?php

	session_start();

	$name = $_POST['pname'];
	$image = $_POST['pimage'];
	$price = $_POST['pprice'];
	$quantity = $_POST['quantity'];

	$products = array($name,$image,$price,$quantity);

	$_SESSION[$name] = $products;

	header("location: ../home.php");