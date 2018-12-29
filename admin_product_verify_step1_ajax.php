<?php
include 'db-connect.php';
$id=$_REQUEST['id'];
$sql1="UPDATE product_ship SET shipping_status=2 WHERE product_id_pk='$id'";
mysqli_query($conn,$sql1);
?>
