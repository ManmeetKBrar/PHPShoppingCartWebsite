<div class="modal fade details-3" id="details-3" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!--Modal Header Begins-->
			<div class="modal-header">
				<h4 class="modal-title text-center">Adidas Shoes</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<!--Modal Header Ends-->

			<!--Modal Body Begins-->
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img src="images/shoes.png" alt="Adidas Shoes" class="details img-responsive">
							</div>
						</div>
						<div class="col-sm-6">
							<h4>Details</h4>
							<p>These jeans are amazing. You must try them and buy them. Get them while they last.</p>
							<hr/>
							<p>Price: $19.99</p>
							<p>Brand: Levis</p>
							<form action="add_cart.php" method="post">
								<div class="form-group">
									<div class="col-xs-6">
										<label for="quantity" id="quantity-label">Quantity:</label>
										<input type="text" class="form-control" id="quantity" name="quantity">
										<br/>
										<label for="size">Size:</label>
										<select name="size" id="size" class="form-control">
											<option value=""></option>
											<option value="28">28</option>
											<option value="32">32</option>
											<option value="36">36</option>
										</select>
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
				<button class="btn btn-warning" type="submit"><span class="fa fa-shopping-cart"></span> Add to Cart</button>
			</div>
			<!--Modal Footer Ends-->
		</div>
	</div>
</div>