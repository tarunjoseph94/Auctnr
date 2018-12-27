<!DOCTYPE html>
<html>
	<head>
		<?php include 'header.php';?>
	</head>

	<body>
		<div class="main-content container-fluid nopad">
			<div class="row">


			<!-- Header Area Start -->
				<div class="col-md-3">
        <header class="header-area ">
						<?php $id=0;
						include 'sidebar.php';?>
        </header>
			</div>
        <!-- Header Area End -->
				<div class="col-md-9">
					<div class="">
						<div class="container">
							<div class="row">
								<div class="card-columns">
									<?php include 'get_product_details_all.php';
									while($row=mysqli_fetch_assoc($result)){?>
									<div class="long-box card">
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
								<?php } ?>
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
