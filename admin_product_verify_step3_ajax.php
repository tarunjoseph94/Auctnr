<?php
include 'db-connect.php';
$id=$_REQUEST['id'];
$sql1="DELETE FROM product_ship WHERE product_id_pk='$id'";
mysqli_query($conn,$sql1);
?>
