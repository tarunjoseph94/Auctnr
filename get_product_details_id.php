<?php
include 'db-connect.php';
$product_id=$_REQUEST['id'];
$sql1="SELECT product_name,product_description,product_price,product_image1,
product_image2,product_image3 FROM product_details WHERE product_id_pk='$product_id'";
if($result=mysqli_query($conn,$sql1))
{
  $product=$result->fetch_assoc();
  $product_name=$product['product_name'];
  $product_description=$product['product_description'];
  $product_price=$product['product_price'];
  $product_image1=$product['product_image1'];
  $product_image2=$product['product_image2'];
  $product_image3=$product['product_image3'];
}
else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
?>
