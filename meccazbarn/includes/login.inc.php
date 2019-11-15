<?php

if (isset($_POST['login-submit'])) {
	/*Adding Database Connection File */
	require 'dbh.inc.php';

	/*Fetching data submitted by user in login form*/
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	
	/*Checking the correctness of data entered by user*/
	/*1) if any fields left empty*/
	if (empty($username) || empty($pwd)) {
		header("Location: ../index.php?error=emptyfields&username=".$username);
		exit();
	}
	else{
		$query= "SELECT * FROM users WHERE username=? OR email=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$query)) {
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt,"ss",$username, $username);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdcheck = password_verify($pwd, $row['pwd']);
				if ($pwdcheck == false) {
					header("Location: ../index.php?error=wrongpassword");
					exit();
				}
				else if($pwdcheck == true){
					session_start();
					$_SESSION['id'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					header("Location: ../home.php");
					exit();
				}
				else{
					header("Location: ../index.php?error=wrongpassword");
					exit();
				}
			}
			else{
				header("Location: ../index.php?error=nouser");
				exit();
			}
		}
	}












}
else{
	header("Location: ../index.php");
	exit();
}