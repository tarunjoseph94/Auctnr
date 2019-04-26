<?php
include 'db-connect.php';

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email=$_POST['email'];
  $name=$_POST['name'];
  $pwd=$_POST['password'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];
  $pin=$_POST['pin'];
  $flag=0;
  if (empty($email)) {
    $flag=1;
  }
  else {
    $email = test_input($email);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $flag=1;
  }
  if(empty($pwd))
  {
    $flag=1;
  }
  if(empty($mobile))
  {
    $flag=1;
  }
  if(empty($name))
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
    $pwd=md5($pwd);
    $sql1="INSERT INTO user( user_type, user_email) VALUES (3,'$email')";
    $sql2="SELECT user_id_pk from USER WHERE user_email='$email'";
    echo $sql1;
    if (mysqli_query($conn, $sql1)) {
    $result=mysqli_query($conn,$sql2);
    $user_id=$result->fetch_assoc();
    $user_id=$user_id['user_id_pk'];
    $sql3="INSERT INTO seller_details
    (seller_email,seller_password,seller_mobile,seller_address,seller_pin,user_id_fk,seller_name)
    VALUES ('$email','$pwd','$mobile','$address','$pin','$user_id','$name') ";
      if (mysqli_query($conn, $sql3)) {
      echo "Everything is sucessful";
      }
      else {
        echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
      }
    }
    else {
      echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }
  }
}
}
?>
