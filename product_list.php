<?php
include 'db-connect.php';
session_start();
$user_id=$_SESSION['$user_id'];
$sql="SELECT product_image1,product_price,product FROM product_details"
?>
<div class="col-sm-4">
  <div class="image-container">

  </div>

</div>
<div class="col-sm-4">
  <div class="product-title">

  </div>
</div>
<div class="col-sm-4">
  <div class="product-action-button">
    <button class="btn ">End biding</button>
    <button class="btn ">Remove product</button>
  </div>
</div>
