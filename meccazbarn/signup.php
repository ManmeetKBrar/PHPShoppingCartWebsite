<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--CSS Files-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
	<!--Scripts-->
	<script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>Meccaz Barn - Sign Up</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Meccaz Barn</a>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav mr-auto">
					<li class="nav-item "><a href="#">About Us</a></li>
					<li class="nav-item "><a href="#">Services</a></li>
					<li class="nav-item "><a href="#">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<main id="signuppage">
		<div class="fullscreen-bg">
   			<video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
       			 <source src="videos/trees.mp4" type="video/mp4">
       		</video>
		</div>
		<div class="container form-wrapper">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 text-center"><h1>Sign Up Here!!!</h1><hr/></div>
				<div class="col-sm-3"></div>
			</div>
			<!--Error messages-->
			<?php
				if (isset($_GET['error'])) {
					if ($_GET['error']=="emptyfields") {
						echo "<p class='error-msg'>Fill in all Fields</p>";
					}
					else if ($_GET['error']=="invalidusername") {
						echo "<p class='error-msg'>Invalid Username</p>";
					}
					else if ($_GET['error']=="invalidemail") {
						echo "<p class='error-msg'>Invalid Email</p>";
					}
					else if ($_GET['error']=="checkpassword") {
						echo "<p class='error-msg'>Password and Confirm Password dont match</p>";
					}
					else if ($_GET['error']=="invalidusername&email") {
						echo "<p class='error-msg'>Invalid Username and Email</p>";
					}
					else{
						echo "<p class='error-msg'>Successful</p>";
					}
				}

			?>
			<form class="form-group" action="includes/signup.inc.php" method="post">
				<div class="row signupform">
					<div class="col-sm-6 text-center"><h5>Username</h5></div>
					<div class="col-sm-6 text-center"><input class="form-control" type="text" name="username" placeholder="Enter a username.."></div>
					<div class="col-sm-6 text-center"><h5>E-mail</h5></div>
					<div class="col-sm-6 text-center"><input class="form-control" type="text" name="email" placeholder="Enter your E-mail.."></div>
					<div class="col-sm-6 text-center"><h5>Password</h5></div>
					<div class="col-sm-6 text-center"><input class="form-control" type="password" name="pwd" placeholder="Enter a password.."></div>
					<div class="col-sm-6 text-center"><h5>Confirm Password</h5></div>
					<div class="col-sm-6 text-center"><input class="form-control" type="password" name="pwdconfirm" placeholder="Re-Enter password.."></div>
					<div class="col-sm-4"></div>
					<div class="col-sm-4"><button class="btn btn-block btn-success" type="submit" name="signup-submit">Sign Up</button></div><br/><br/>
				</div>
			</form>
		</div>
	</main>
</body>
</html>