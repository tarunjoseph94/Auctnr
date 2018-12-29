<?php
include 'db-connect.php';
$id=$_REQUEST['id'];
$sql1="SELECT product_details.product_id_pk,product_details.user_id,product_bid.user_id_fk,
product_bid.current_bid from product_details LEFT JOIN product_bid on
product_details.product_id_pk=product_bid.product_id WHERE product_details.product_id_pk='$id'";
$result=mysqli_query($conn,$sql1);
$product=$result->fetch_assoc();
$product_id=$product['product_id_pk'];
$seller_id=$product['user_id'];
$buyer_id=$product['user_id_fk'];
$final_price=$product['current_bid'];
$sql2="INSERT INTO product_ship (product_id_pk, seller_id, buyer_id, final_price,
  shipping_status) VALUES ('$product_id','$seller_id','$buyer_id','$final_price',1)";
mysqli_query($conn,$sql2);
$sql3="DELETE FROM product_details WHERE product_id_pk='$id'";
mysqli_query($conn,$sql3);
?>
