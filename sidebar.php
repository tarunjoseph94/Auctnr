<?php
// echo $_SESSION['login_status'];
echo '
    <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="images/core-img/logo.png" alt=""></a>
            </div>
            <!-- auctnr Nav -->
            <nav class="auctnr-nav mt-30">
                <ul>
								<li class=" mt-15"><a class="side" href="index.php">HOME</a></li>
								<li class=" mt-15"><a class="side" href="shop.php">SHOP</a></li>

                </ul>
            </nav>';
            if($_SESSION['login_status']==2)
            {
              echo '
              <!-- Button Group -->
              <div class="auctnr-btn-group mt-30 mb-100">
                  <a href="sell-profile.php" class="btn auctnr-btn mb-15 ">My profile</a>
                  <button id="logout" class="btn auctnr-btn active">Log Out</button>
              </div>
              ';
            }
            elseif ($_SESSION['login_status']==1) {
              echo '
              <!-- Button Group -->
              <div class="auctnr-btn-group mt-30 mb-100">
                  <a href="buy-profile.php" class="btn auctnr-btn mb-15 ">My profile</a>
                  <button id="logout" class="btn auctnr-btn active">Log Out</button>
              </div>
              ';
            }
            else
            {
              echo '
              <!-- Button Group -->
              <div class="auctnr-btn-group mt-30 mb-100">
                  <a href="signup.php" class="btn auctnr-btn mb-15 ">Sign Up</a>
                  <a href="login.php" class="btn auctnr-btn active">Login</a>
              </div>
              ';
            }

?>
