<!DOCTYPE html>
<html>
	<head>
		<?php include 'header.php';?>
		<?php include 'get_product_details_id.php';?>

	</head>

	<body>
		<div class="main-content container-fluid nopad">
			<div class="row">

			<!-- Header Area Start -->
				<div class="col-sm-3">
        <header class="header-area ">
						<?php include 'sidebar.php';?>
        </header>
			</div>
        <!-- Header Area End -->
				<div class="col-sm-9">
          <div class="product-details mt-30 mb-30">
						<div class="row">
							<div class="col-sm-6">
								<div class=" product-slider">
									<!-- Full-width images with number text -->
									<div class="mySlides">
											<img src="images/product-img/<?php echo $product_image1;?>" style="width:100%">
									</div>
									<div class="mySlides">
											<img src="images/product-img/<?php echo $product_image2;?>" style="width:100%">
									</div>
									<div class="mySlides">
											<img src="images/product-img/<?php echo $product_image3;?>" style="width:100%">
									</div>
									<!-- Next and previous buttons -->
									<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
									<a class="next" onclick="plusSlides(1)">&#10095;</a>

									<!-- Thumbnail images -->
									<div class="row normargin">
										<div class="column">
											<img class="demo cursor" src="images/product-img/<?php echo $product_image1;?>" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
										</div>
										<div class="column">
											<img class="demo cursor" src="images/product-img/<?php echo $product_image2;?>" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
										</div>
										<div class="column">
											<img class="demo cursor" src="images/product-img/<?php echo $product_image3;?>" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="product-info">
									<div class="product-title">
										<h3 class="product-title-heading"><?php echo $product_name;?></h3>
									</div>
									<div class="product-details">
										<?php echo $product_description;?>
									</div>
									<div class="product-price">
										<h3>Current price</h3>
										<h4><?php echo $product_price;?></h4>
									</div>
									<div class="product-bid">
										<form>
											<h3>Your Bid</h3>
											<input type="number" class ="form-control"/>
											<input type="submit" name="bid" class="btn active  mt-15"  />
										</form>
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
	<script src="js/script.js"></script>
	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
	showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
	showSlides(slideIndex = n);
	}

	function showSlides(n) {
	console.log(n);
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slides[slideIndex-1].style.display = "block";

	}

	</script>

</html>