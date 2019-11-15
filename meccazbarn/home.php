<?php
	session_start();
	/*Condition if user is logged in,session is created then only he should be able to go to homepage,otherwise redirect back*/
	if (!isset($_SESSION['username'])) {
		header("Location: /index.php");
	}
	require "includes/dbh.inc.php";
	$query = "SELECT * FROM products ORDER BY id ASC";
	$result = mysqli_query($conn,$query);
	
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
						<a href="viewcart.php" class="btn btn-outline-success my-2 my-sm-1" name="view-cart">Cart</a>
					</div></div>
					</div>';
				}
			?>
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
			<?php 
			if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)){
			?>
		<div class="col-md-4">
			<h4><?php echo $row['title']; ?></h4>
			<img src="<?php echo $row['image'];?>" alt="<?php echo $row['title']; ?>" id="prod-images">
			<p class="list-price text-danger">List Price: <s>$<?php echo $row['list_price']; ?></s></p>
			<p class="price">Our Price: $<?php echo $row['price']; ?></p>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?php echo $row['id']; ?>">Details</button>
		</div>

		 <!--MODAL START-->
		 <div class="modal fade details-<?php echo $row['id'];?>" id="details-<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="details-<?php echo $row['id'];?>" aria-hidden="true" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!--Modal Header Begins-->
			<div class="modal-header">
				<h4 class="modal-title text-center"><?php echo $row['title'];?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<!--Modal Header Ends-->

			<!--Modal Body Begins-->
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img src="<?php echo $row['image'];?>" alt="<?php echo $row['title'];?>" class="details img-responsive">
							</div>
						</div>
						<div class="col-sm-6">
							<h4>Details</h4>
							<p><?php echo $row['description'];?></p>
							<hr/>
							<p>Price: $<?php echo $row['price'];?></p>
							<p>Brand: <?php echo $row['brand'];?></p>
							<form action="includes/addcart.inc.php" method="post">
								<div class="form-group">
									<div class="col-xs-6">
										<label for="quantity" id="quantity-label">Quantity:</label>
										<input type="text" class="form-control" id="quantity" name="quantity">
										<input type="hidden" name="pname" value="<?php echo $row['title'];?>">
										<input type="hidden" name="pprice" value="<?php echo $row['price'];?>">
										<input type="hidden" name="pimage" value="<?php echo $row['image'];?>">
										<br>
										<button class="btn btn-warning" type="submit"><span class="fa fa-shopping-cart"></span> Add to Cart</button>
										<br/>
										<!--<label for="size">Size:</label>
										<select name="size" id="size" class="form-control">
											<option value=""></option>
											<option value="28">28</option>
											<option value="32">32</option>
											<option value="36">36</option>
										</select>-->
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--Modal Body Ends-->

			<!--Modal Footer Begins-->
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			<!--Modal Footer Ends-->
		</div>
	</div>
</div>
		 <!--MODAL END-->
		<?php
		}
	}

?>
		
		</div>
	</div>
	

	<footer class="text-center bg-light" id="footer">&copy; Copyright Meccaz Barn 2019-2020</footer>
	<!--Main content of page ends-->

	
</body>
</html>
