<?php
include 'db-connect.php';
$sql1="SELECT product_details.product_id_pk,product_image1,ship_ready,product_name ,
product_description,product_ship.final_price,product_ship.shipping_status,
seller_details.seller_address,buyer_details.buyer_address FROM product_details
LEFT JOIN product_ship ON product_details.product_id_pk=product_ship.product_id_pk JOIN
seller_details ON product_ship.seller_id=seller_details.user_id_fk JOIN buyer_details ON
product_ship.buyer_id=buyer_details.user_id_fk";
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
            <div class="product-title col-sm-3">
              <h4>Product Name</h4>
              <h5><?php echo $product['product_name']; ?></h5>
            </div>
            <div class="Final-price col-sm-6">
              <?php if($product['shipping_status']==3)
              {?>
                <h4>Customer address</h4>
                <h5><?php echo $product['buyer_address']; ?></h5>
              <?php } elseif($product['shipping_status']==4){
              ?>
                <h4>Seller address</h4>
                <h5><?php echo $product['seller_address']; ?></h5>
              <?php }else {
                ?>
                <h4>Product Description</h4>
                <h5><?php
                echo $product['product_description']; ?></h5>
                <?php
              }?>
            </div>
          </div>
      </div>
      <!-- <input type="hidden" id="product-id" value=""> -->
      <div class="col-sm-3">
        <div class="shipping-status">
          <h4>Product Status</h4>
            <?php if($product['shipping_status']==1)
            {?>
                <button  class="btn auctnr-btn active mb-15 admin-verify-step-1" data-id="<?php echo $product['product_id_pk']; ?>">Product Received</button>
          <?php  }elseif($product['shipping_status']==2){ ?>
          <button  class="btn auctnr-btn active mb-15 admin-verify-step-2-pass" data-id="<?php echo $product['product_id_pk']; ?>">Verification passed</button>
          <button  class="btn auctnr-btn  admin-verify-step-2-fail" data-id="<?php echo $product['product_id_pk']; ?>">Verification failed</button>
          <?php  }elseif($product['shipping_status']==3){ ?>
          <button  class="btn auctnr-btn active mb-15 admin-verify-step-3" data-id="<?php echo $product['product_id_pk']; ?>">Customer Recived</button>
          <?php  }elseif($product['shipping_status']==4){ ?>
          <button  class="btn auctnr-btn active mb-15 admin-verify-step-3" data-id="<?php echo $product['product_id_pk']; ?>">Seller Recived</button>
        <?php }}?>
        </div>
      </div>
    </div>
  </div>

<?php } ?>
</div>
<script>

$('.admin-verify-step-1').on('click', function (event) {
  var id=$(this).data('id');
  if(confirm("Has the product has been received? "))
  {
  event.preventDefault();
  //alert(id);
        $.ajax({
        url: "admin_product_verify_step1_ajax.php?id="+id,
        success:function(result){
          $("#admin_info").html(result);
        }});
      }
});
$('.admin-verify-step-2-pass').on('click', function (event) {
  var id=$(this).data('id');
  if(confirm("The product meets the description and the picture? "))
  {
  event.preventDefault();
  //alert(id);
        $.ajax({
        url: "admin_product_verify_step2_pass_ajax.php?id="+id,
        success:function(result){
          $("#admin_info").html(result);
        }});
      }
});
$('.admin-verify-step-2-fail').on('click', function (event) {
  var id=$(this).data('id');
  if(confirm("The product does not meets the description and the picture? "))
  {
  event.preventDefault();
  //alert(id);
        $.ajax({
        url: "admin_product_verify_step2_fail_ajax.php?id="+id,
        success:function(result){
          $("#admin_info").html(result);
        }});
      }
});
$('.admin-verify-step-3').on('click', function (event) {
  var id=$(this).data('id');
  if(confirm("The product has been shipped? "))
  {
  event.preventDefault();
  //alert(id);
        $.ajax({
        url: "admin_product_verify_step3_ajax.php?id="+id,
        success:function(result){
          $("#admin_info").html(result);
        }});
      }
});

</script>
