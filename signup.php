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
						<?php include 'sidebar.php';?>
        </header>
			</div>
        <!-- Header Area End -->
				<div class="col-md-5">
          <div class="login-form mt-30">
            <center>
              <h3>Sign up as a buyer</h3>
							<h4>Want to sell on this platform <a href="signup_seller.php">Click Here</a></h4>
            </center>
            <form class="mt-15" method="post">
                Enter your Email Id
              <input type="text" class="form-control" name="email" id="email" />
                Enter your Password
              <input type="password" class="form-control" name="pwd" id="pwd" />
                Enter your Confirm Password
              <input type="password" class="form-control" name="conpwd" id="conpwd"/>
                Enter your Mobile number
              <input type="text" class="form-control" name="mobileno" id="mobileno"/>
                Enter your address
              <textarea class="form-control" name="address" id="address"></textarea>
                Enter your pincode
              <input type="text" class="form-control" name="pin" id="pin"/>
                <center>
									<button class="btn active mt-30 mb-30" id="signup-buy-submit">Sign up</button>
                  <input type="reset" class="btn mt-30 mb-30" />
                </center>


            </form>
          </div>
				</div>
			</div>

			<div id="test">

			</div>

			<div class="row">
					<?php include 'footer.php'; ?>
			</div>
		</div>
	</body>



</html>
