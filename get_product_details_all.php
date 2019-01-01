<?php
include 'db-connect.php';
if($id==1)
{
  $sql1='SELECT *, IF(product_bid.current_bid>product_details.product_price,product_bid.current_bid,product_details.product_price) as high_price from product_details LEFT JOIN product_bid on
  product_details.product_id_pk=product_bid.product_id WHERE product_details.ship_ready!=1 ORDER BY product_id_pk ASC';
}
else {
  $sql1='SELECT *, IF(product_bid.current_bid>product_details.product_price,product_bid.current_bid,product_details.product_price) as high_price from product_details LEFT JOIN product_bid on
  product_details.product_id_pk=product_bid.product_id WHERE product_details.ship_ready!=1 ORDER BY product_id_pk ASC LIMIT 9';
}
$result=mysqli_query($conn,$sql1);

?>
