<?php
include 'db-connect.php';
session_start();
$user_id=$_SESSION['user_id'];
$sql1="SELECT product_details.product_id_pk,product_image1,ship_ready,product_name ,
product_ship.final_price,product_ship.shipping_status FROM product_details LEFT JOIN product_ship ON
product_details.product_id_pk=product_ship.product_id_pk WHERE user_id='$user_id'";
$result=mysqli_query($conn,$sql1);
?>
<div class="col-sm-12">
<?php while ($product=mysqli_fetch_assoc($result)) {
if($product['ship_ready']==1)
{
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
            <div class="Final-price col-sm-6">
              <h4>Final price</h4>
              <h5><?php echo $product['final_price']; ?></h5>
            </div>
          </div>
      </div>
      <!-- <input type="hidden" id="product-id" value=""> -->
      <div class="col-sm-3">
        <div class="shipping-status">
          <h4>Product Status</h4>
            <?php if($product['shipping_status']==1)
            {?>
              Please ship your product to our office <a href="shipping_details.php">Click here for more information</a>
          <?php  } ?>
        </div>
      </div>
    </div>
  </div>

<?php }} ?>
</div>
<script>

$('.remove-product-seller').on('click', function (event) {
  var id=$(this).data('id');
  if(confirm("This is will delete your product"))
  {
  event.preventDefault();
  //alert(id);
        $.ajax({
        url: "seller_product_delete_ajax.php?id="+id,
        success:function(result){
          $("#seller_info").html(result);
        }});
      }
});
$('.end-bid').on('click', function (event) {
  var id=$(this).data('id');
  if(confirm("This is will end sale of your product"))
  {
  event.preventDefault();
  //alert(id);
        $.ajax({
        url: "seller_product_end_bid_ajax.php?id="+id,
        success:function(result){
          $("#seller_info").html(result);
        }});
      }
});
</script>
