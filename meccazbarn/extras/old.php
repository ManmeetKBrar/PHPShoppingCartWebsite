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
	<script type="text/javascript">
		$('.carousel').carousel({
 			 interval: 1000
		})
	</script>
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
						<li><a class="dropdown-item" href="#">Shirts</a></li>
						<li><a class="dropdown-item" href="#">Pants</a></li>
						<li><a class="dropdown-item" href="#">Shoes</a></li>
						<li><a class="dropdown-item" href="#">Accessories</a></li>
					</ul>
				</li>
			<!--Menu Item 3-->
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="text">Kids<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Shirts</a></li>
						<li><a class="dropdown-item" href="#">Pants</a></li>
						<li><a class="dropdown-item" href="#">Shoes</a></li>
						<li><a class="dropdown-item" href="#">Accessories</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!--Navigation Bar Ends-->

	<!--Carousel Images at top start-->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner">
   			 <div class="carousel-item active">
    			<div class="d-block w-100" id="background-image">
      				<div id="image-1"></div>
					<div id="image-2"></div>
					<div id="image-3"></div>
					<div id="image-4"></div>
    			</div>
    		</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="images/slide-2.jpg" alt="Second slide" id="background-image">
    	</div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/slide-3.gif" alt="Third slide" id="background-image">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!--Carousel Images at top end-->
	
	<!--Main content of page starts-->
	<div class="container featured-products">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h2 class="text-center featured">Featured Products</h2>
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row">
		<div class="col-md-4">
			<h4>Levis Jeans</h4>
			<img src="images/jeans.png" alt="Levis Jeans" id="prod-images">
			<p class="list-price text-danger">List Price: <s>$24.99</s></p>
			<p class="price">Our Price: $19.99</p>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
		</div>

		<div class="col-md-4">
			<h4>Rolex Watch</h4>
			<img src="images/watch.png" alt="Rolex Watch" id="prod-images">
			<p class="list-price text-danger">List Price: <s>$999.99</s></p>
			<p class="price">Our Price: $799.99</p>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
		</div>

		<div class="col-md-4">
			<h4>Adidas Shoes</h4>
			<img src="images/shoes.png" alt="Adidas Shoes" id="prod-images">
			<p class="list-price text-danger">List Price: <s>$179.99</s></p>
			<p class="price">Our Price: $150.99</p>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
		</div>

		<div class="col-md-4">
			<h4>Floral Dress</h4>
			<img src="images/dress.png" alt="Floral Dress" id="prod-images">
			<p class="list-price text-danger">List Price: <s>$45.99</s></p>
			<p class="price">Our Price: $39.99</p>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
		</div>

		<div class="col-md-4">
			<h4>Diamond Necklace</h4>
			<img src="images/necklace.png" alt="Diamond Necklace" id="prod-images">
			<p class="list-price text-danger">List Price: <s>$2229.99</s></p>
			<p class="price">Our Price: $2000.99</p>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
		</div>
		</div>
	</div>

	<footer class="text-center bg-light" id="footer">&copy; Copyright Meccaz Barn 2019-2020</footer>
	<!--Main content of page ends-->


	<!--Modal Code Begins-->
	<?php
		include 'details-modal-LevisJeans.php';
		include 'details-modal-RolexWatch.php';
		include 'details-modal-AdidasShoes.php';
		include 'details-modal-FloralDress.php';
		include 'details-modal-DiamondNecklace.php';
	?>
	<!--Modal Code Ends-->

	
</body>
</html>
