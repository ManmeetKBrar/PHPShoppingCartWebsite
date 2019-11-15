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
	<title>Meccaz Barn - Log in</title>
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

			<?php
				if (isset($_SESSION['username'])) {
					echo'<div class="column">
						<form class="form-inline" action="includes/logout.inc.php" method="post">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout-submit">Log Out</button>
						</form>
					</div>';
				}
				else{
					echo'<div class="col-lg-6 nav-forms">
				<div class="row">
					<div class="column">
						<!--Log In Form Starts-->
						<form class="form-inline" action="includes/login.inc.php" method="post" autocomplete="off">
							<input class="form-control mr-sm-2" type="text" name="username" placeholder="Enter Username/Email..." autocomplete="no">
							<input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Enter Password..." autocomplete="new-password">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="login-submit">Log In</button>
						</form>
					</div>
					<div class="column">
						<a style="float: right;" href="signup.php"><button type="button" class="btn btn-success" name="button-signup">Sign Up!!</button></a>
						<!--Log In Form Ends-->
					</div>
					
				</div>
			</div>';
				}


			?>
			
		</nav>
	</header>

	<main>
		<div class="fullscreen-bg">
   			<video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
       			 <source src="videos/trees.mp4" type="video/mp4">
       		</video>
		</div>
		<div class="container front-wrapper">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 text-center"><h1>Log In / Sign Up to Continue</h1></div>
				<div class="col-sm-3"></div>
			</div>			
		</div>
	</main>
</body>
</html>