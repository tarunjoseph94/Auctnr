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
              <h3>Login As a buyer</h3>
							<h4>Login as a seller <a href="login_seller.php">Click Here</a></h4>
            </center>
            <form class="mt-15" method="post">

                Enter your Email Id

              <input type="text" class="form-control" name="email" id="email"/>

                Enter your Password

              <input type="password" class="form-control" name="pwd" id="pwd"/>

                <center>
                  <button class="btn active mt-30 mb-30" id="login-buyer-submit" >Login</button>
                  <input type="reset" class="btn mt-30 mb-30" />
                </center>


            </form>
          </div>
				</div>
			</div>
				</div>
			<div class="row">
					<?php include 'footer.php'; ?>
				</div>

		
	</body>


</html>
