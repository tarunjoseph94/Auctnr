<?php
include 'db-connect.php';
session_start();
$user_id=$_SESSION['user_id'];
$sql1="SELECT product_image1,product_price,product_name ,product_bid.current_bid
FROM product_details LEFT JOIN product_bid ON
product_details.product_id_pk=product_bid.product_id WHERE user_id='$user_id'";
$result=mysqli_query($conn,$sql1);
?>
<div class="col-sm-8">
<?php while ($product=mysqli_fetch_assoc($result)) {

?>
  <div class="mt-30">
    <div class="row">
      <div class="col-sm-3">
        <div class="image-container">
          <img src="images/product-img/<?php echo $product['product_image1'];?>" object-fit="contain" height="100%" width="100%"/>
        </div>
      </div>
      <div class="col-sm-6">
          <div class="row">
            <div class="product-title col-sm-4">
              <h4>Product Name</h4>
              <h5><?php echo $product['product_name']; ?></h5>
            </div>
            <div class="product-price col-sm-4">
              <h4>Start Price</h4>
              <h5><?php echo $product['product_price']; ?></h5>
            </div>
            <div class="Current-Bid col-sm-4">
              <h4>Current Bid</h4>
              <h5><?php echo $product['current_bid']; ?></h5>
            </div>
          </div>
      </div>
      <div class="col-sm-3">
          <div class="auctnr-btn-group ">
            <button  class="btn auctnr-btn mb-15 ">End Biding</button>
            <button  class="btn auctnr-btn active">Remove Product</button>
          </div>
      </div>
    </div>
  </div>

<?php } ?>
</div>
