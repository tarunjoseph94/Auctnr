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
				<!-- Customer dashboard bar -->
				<div class="col-sm-2">
					<div class="auctnr-nav  mt-50">
						<ul>
							<li class=" mt-15"><a class="side" id="buyer-my-profile">Edit my Profile</a></li>
              <li class=" mt-15"><a class="side" id="buyer-my-products">My Products</a></li>
              <li class=" mt-15"><a class="side" id="buyer-product-status">Products Status</a></li>
						</ul>
					</div>
				</div>
				<!-- Customer dashboard End-->
				<div class="col-md-8">
					<div id="buyer_info" class="mt-30">

          </div>
					</div>


			</div>

			<div class="row">
        	<?php include 'footer.php'; ?>
			</div>
		</div>
	</body>
	<script src="js/bootstrap.min.js"></script>

</html>
