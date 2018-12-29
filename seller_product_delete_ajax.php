<?php
include 'db-connect.php';
$id=$_REQUEST['id'];
$sql1="DELETE FROM product_details WHERE product_id_pk='$id'";
mysqli_query($conn,$sql1);
?>
