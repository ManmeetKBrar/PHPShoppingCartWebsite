<?php
	session_start();

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Meccaz Barn</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--CSS Files-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
	<!--Scripts-->
	<script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</head>
<body>
	<!--Navigation Bar starts-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
		<div class="container collapse navbar-collapse">
			<a href="/mkecom/index.php" class="navbar-brand">Meccaz Barn</a>
			<ul class="nav navbar-nav mr-auto">
				<!--Menu Item 1-->
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="text">Men<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Shirts</a></li>
						<li><a class="dropdown-item" href="#">Pants</a></li>
						<li><a class="dropdown-item" href="#">Shoes</a></li>
						<li><a class="dropdown-item" href="#">Accessories</a></li>
					</ul>
				</li>
			<!--Menu Item 2-->
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="text">Women<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Tops</a></li>
						<li><a class="dropdown-item" href="#">Skirts</a></li>
						<li><a class="dropdown-item" href="#">Heels</a></li>
						<li><a class="dropdown-item" href="#">Accessories</a></li>
					</ul>
				</li>
			<!--Menu Item 3-->
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="text">Kids<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Toys</a></li>
						<li><a class="dropdown-item" href="#">Prams</a></li>
						<li><a class="dropdown-item" href="#">Candies</a></li>
						<li><a class="dropdown-item" href="#">Accessories</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!--To check if user logged in, show welcome user msg and logout button-->
		<?php
				if (isset($_SESSION['username'])) {
					$username = $_SESSION['username']; 
					echo'<div class="col-md-3">
					<div class="row"
					<div class="column">
						<p class="welcometext" >Welcome ,'.$username.' </p>&nbsp;
						<form class="form-inline" action="includes/logout.inc.php" method="post">
							<button class="btn btn-outline-success my-2 my-sm-1" type="submit" name="logout-submit">Log Out</button>
						</form>&nbsp;
						<a href="home.php" class="btn btn-outline-success my-2 my-sm-1" name="back-home">Back</a>
					</div></div>
					</div>';
				}
			?>
	</nav>
	<!--Navigation Bar Ends-->

	<h2 align="center">Your Cart Products : </h2>
	<!--Code to view products added to cart -->
	<table class="table">
		<thead>
			<tr>
				<th>Sno</th>
				<th>Name</th>
				<th>Image</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Bill</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sno=1;
				foreach ($_SESSION as $products) {
					$p=0;
					$q=0;
					$total=0;
					/*Done because without this, it prints all session variables set before like id and username*/				
					/*This if to prevent the error of Invalid arguments passed in foreach because it should always be an array to be used in foreach*/
					if(is_array($products)){
						
						global $gt;
						echo "<tr>";
						echo "<td>".($sno++)."</td>";
						echo "<form action='includes/editcart.inc.php' method='post'>";
							foreach($products as $key => $value) {
							if ($key == 3) {
								echo "<td><input type='text' name='name$key' class='form-control' value=".$value."></td>";
								$q=$value;
							} else if ($key == 2) {
								echo "<input type='hidden' name='name$key' value='".$value."'>";
								echo "<td>".$value."</td>";
								$p = $value ;
							}else if ($key == 1) {
								echo "<input type='hidden' name='name$key' value='".$value."'>";
								echo "<td><img class='cart-img' src='".$value."'/></td>";
							}else if ($key == 0) {
								echo "<input type='hidden' name='name$key' value='".$value."'>";
								echo "<td>".$value."</td>";
							}
						}
						$total=$p*$q;
						$gt += $total;
						echo "<td>".($total)."</td>";
						echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
						echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
						echo "</form>";
						echo "</tr>";
						
					}					
				}

				echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td><h4>Grand Total:</h4></td>";
				echo"<td><h4>".$gt."</h4></td>";
				echo "<td><button type='button' name='buy-now' class='btn btn-success'>Buy Now</button></td>";
				echo"</tr>";
			?>
		</tbody>
	</table>
	
</body>
</html>
