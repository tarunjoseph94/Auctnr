<div class="col-sm-12 mt-30">
  <div class="row footer_area">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-2">
      <div class="logo-foot mt-30">
        <img src="images/core-img/logo2.png" />
      </div>
    </div>
    <div class="col-sm-4">
      <div class="footer-link mt-30">
        <ul>
          <li>
            <a clas href="index.php">Home</a>
          </li>
          <li>
            <a href="shop.php">Shop</a>
          </li>
          <li>
            <a href="contact_us.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
      <div class="col-sm-2">
            <?php
                if($_SESSION['login_status']==2)
                {
                ?>
                  <!-- Button Group -->
                  <div class="auctnr-btn-group mt-30 mb-100">
                      <a href="sell_profile.php" class="btn auctnr-btn mb-15 ">My profile</a>
                      <button id="logout" class="btn auctnr-btn active">Log Out</button>
                  </div>
                  <?php
                }
                elseif ($_SESSION['login_status']==1) {
                  ?>
                  <!-- Button Group -->
                  <div class="auctnr-btn-group mt-30 mb-100">
                      <a href="buy_profile.php" class="btn auctnr-btn mb-15 ">My profile</a>
                      <button id="logout" class="btn auctnr-btn active">Log Out</button>
                  </div>
                    <?php
                  }
                elseif ($_SESSION['login_status']==3) {
                  ?>
                  <!-- Button Group -->
                  <div class="auctnr-btn-group mt-30 mb-100">
                      <a href="admin_profile.php" class="btn auctnr-btn mb-15 ">My profile</a>
                      <button id="logout" class="btn auctnr-btn active">Log Out</button>
                  </div>
                  <?php
                }
                else
                {
                  ?>
                  <!-- Button Group -->
                  <div class="auctnr-btn-group mt-30 mb-100">
                      <a href="signup.php" class="btn auctnr-btn mb-15 ">Sign Up</a>
                      <a href="login.php" class="btn auctnr-btn active">Login</a>
                  </div>
                  <?php
                }
                ?>
      </div>
    </div>
  </div>
