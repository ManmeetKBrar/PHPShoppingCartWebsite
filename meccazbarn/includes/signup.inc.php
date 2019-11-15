<?php

if (isset($_POST['signup-submit'])) {

	/*Adding Database Connection File */
	require 'dbh.inc.php';

	/*Fetching data submitted by user in signup form*/
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$pwdconfirm = $_POST['pwdconfirm'];

	/*Checking the correctness of data entered by user*/
	/*1) if any fields left empty*/
	if (empty($username) || empty($email) || empty($pwd) || empty($pwdconfirm)) {
		header("Location: ../signup.php?error=emptyfields&username=".$username."&email=".$email);
		exit();
	}
	/*2) if both username and email are invalid*/
	elseif (!filter_var($email , FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalidusername&email");
		exit();
	}
	/*3) if email is invalid*/
	elseif (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidemail&username=".$username);
		exit();
	}
	/*4) if username is invalid*/
	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalidusername&email=".$email);
		exit();
	}
	/*5) if password and confirm password dont match*/
	elseif ($pwd !== $pwdconfirm) {
		header("Location: ../signup.php?error=checkpassword&username=".$username."&email=".$email);
		exit();
	}
	/*6) if username already exists*/
	else{
		$query = "SELECT username FROM users WHERE username=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$query)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt,"s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$result = mysqli_stmt_num_rows($stmt);
			if ($result > 0) {
				header("Location: ../signup.php?error=usertaken&email=".$email);
				exit();
			}
			else{
				$query = "INSERT INTO users (username,email,pwd) VALUES (?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt,$query)) {
					header("Location: ../signup.php?error=sqlerror");
					exit();
				}
				else{

					$hashedpwd=password_hash($pwd,PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt,"sss", $username,$email,$hashedpwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../index.php?signup=success");
					exit();
				}
			}
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}

else{
	header("Location: ../signup.php");
					exit();
}

?>