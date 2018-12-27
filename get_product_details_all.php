<?php
include 'db-connect.php';
if($id==1)
{
  $sql1='SELECT * from product_details';
}
else {
  $sql1='SELECT * from product_details LIMIT 9';
}
$result=mysqli_query($conn,$sql1);

?>
