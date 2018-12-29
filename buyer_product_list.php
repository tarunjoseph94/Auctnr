<?php
include 'db-connect.php';
session_start();
$user_id=$_SESSION['user_id'];
$sql1="SELECT current_bid,product_details.product_image1,
product_details.product_name from product_bid join product_details on
product_bid.product_id=product_details.product_id_pk WHERE user_id_fk='$user_id'";
$result=mysqli_query($conn,$sql1);
?>
<div class="col-sm-8">
  <h2>Currently Bid items</h2>
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
            <div class="product-title col-sm-6">
              <h4>Product Name</h4>
              <h5><?php echo $product['product_name']; ?></h5>
            </div>
            <div class="Current-Bid col-sm-6">
              <h4>Current Bid</h4>
              <h5><?php echo $product['current_bid']; ?></h5>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>

<?php } ?>
</div>
