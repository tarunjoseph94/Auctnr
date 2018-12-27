<!DOCTYPE html>
<html>
	<head>
		<?php include 'header.php';?>
	</head>

	<body>
		<div class="main-content container-fluid nopad">
			<div class="row">


			<!-- Header Area Start -->
				<div class="col-md-2">
        <header class="header-area ">
      			<?php include 'sidebar.php';?>
        </header>
			</div>

        <!-- Header Area End -->
				<!-- category bar -->
				<div class="col-sm-2">
					<div class="sort mt-30">
						<form>
							<p>
								Sort By
							</p>
							<select class="form-control" id="sort-shop">
								<option selected value="1">
									Oldest Products
								</option>
								<option value="2">
									Newest Products
								</option>
								<option value="3">
									Price Lowest to Highest
								</option>
								<option value="4">
									Price Highest to Lowest
								</option>

							</select>
						</form>
					</div>
				</div>
				<!-- category bar End-->
				<div class="col-md-8">
					<div class="">
						<div class="container">

								<div class="item-grid">
									<div id="sorted">
										<?php $id=1;
										$i=0;
										$flag=0;
										include 'get_product_details_all.php';
										while($row=mysqli_fetch_assoc($result)){
											if($i%3==0)
											{?>
													<div class="row">
														<?php
											}?>
												<div class="long-box col-sm-4">
													<div class="item">
														<a href="product-details.php?id=<?php echo $row['product_id_pk']?>">
															<div class="item-img">
																<img src="images/product-img/<?php echo $row['product_image1']?>" object-fit="contain" height="100%" width="100%" />
															</div>
														</a>
														<div class="item-details">
															<p>
																From <?php echo $row['product_price']?>
															</p>
															<p>
																<?php echo $row['product_name']?>
															</p>
														</div>
													</div>
												</div>
											<?php
											if($i%3==0 && $flag==1)
											{?>
											</div>
														<?php
											} $i++;
										$flag=1;
									} ?>

											</div>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="row footer_area">
						<div class="col-sm-4">
							<div class="logo-foot">

							</div>
						</div>
						<div class="col-sm-8">
							<div class="footer-link">
								<ul>
									<li>
										<a href="index.php">Home</a>
									</li>
									<li>
										<a href="shop.php">Shop</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="js/bootstrap.min.js"></script>

</html>
