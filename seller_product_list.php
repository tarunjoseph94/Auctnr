<?php
include 'db-connect.php';
session_start();
$user_id=$_SESSION['user_id'];
$sql1="SELECT product_id_pk,product_image1,product_price,product_name,ship_ready ,product_bid.current_bid
FROM product_details LEFT JOIN product_bid ON
product_details.product_id_pk=product_bid.product_id WHERE user_id='$user_id'";
$result=mysqli_query($conn,$sql1);
?>
<div class="col-sm-12 ">
<?php while ($product=mysqli_fetch_assoc($result)) {
if($product['ship_ready']==0)
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
      <!-- <input type="hidden" id="product-id" value=""> -->
      <div class="col-sm-3">
          <div class="auctnr-btn-group ">
            <?php
            if($product['current_bid'])
            {
              ?>
              <button  class="btn auctnr-btn active mb-15 end-bid" data-id="<?php echo $product['product_id_pk']; ?>">End Biding</button>
            <?php  }?>
            <button  class="btn auctnr-btn  remove-product-seller" data-id="<?php echo $product['product_id_pk']; ?>">Remove Product</button>
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
