<?php
include 'db-connect.php';
session_start();
$user_id=$_SESSION['user_id'];

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pwd=$_POST['password'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];
  $pin=$_POST['pin'];
  $flag=0;
  if(empty($pwd))
  {
    $flag=1;
  }
  if(empty($mobile))
  {
    $flag=1;
  }
  else {
    if(!is_numeric($mobile))
    {
      $flag=1;
    }
  }
  if(empty($pin))
  {
    $flag=1;
  }
  else {
    if(!is_numeric($pin))
    {
      $flag=1;
    }
  }
  if(empty($address))
  {
    $flag=1;
  }
  else {
    $address=test_input($address);
  }


  if($flag==0)
  {

    $sql1="UPDATE buyer_details SET buyer_password='$pwd',buyer_mobile='$mobile',
    buyer_address='$address',buyer_pin='$pin' WHERE user_id_fk='$user_id'";
    if (mysqli_query($conn, $sql1)) {
      echo "Profile Information Updated";
      }
      else {
        echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
      }
    }

}
?>
