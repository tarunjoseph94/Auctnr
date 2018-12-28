<?php
include 'db-connect.php';
session_start();
$user_id=$_SESSION['user_id'];
$product_id=$_REQUEST['id'];
$product_bid=$_REQUEST['bid'];
$sql1="SELECT current_bid FROM product_bid WHERE product_id='$product_id'";

$result=mysqli_query($conn,$sql1);

if(mysqli_num_rows($result) == 0 || mysqli_num_rows($result) == '' )
{

  $sql3="INSERT INTO product_bid(user_id_fk,current_bid,product_id) VALUES
  ('$user_id','$product_bid','$product_id')";
  if(mysqli_query($conn,$sql3))
  {
    echo "Your bid has been placed";
  }
  else {
      echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
  }
}
else
{
  $sql2="UPDATE product_bid SET user_id_fk='$user_id',current_bid='$product_bid'";
  mysqli_query($conn,$sql2);
  echo "Your bid has been placed";
}

?>
