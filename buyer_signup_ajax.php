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
  echo "$email";
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
    echo $email;
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

  echo "TEST";
  if($flag==0)
  {
    $pwd=md5($pwd);
    echo "IN FLAG";
    $sql1="INSERT INTO user( user_type, user_email) VALUES (2,'$email')";
    $sql2="SELECT user_id_pk from USER WHERE user_email='$email'";
    echo $sql1;
    if (mysqli_query($conn, $sql1)) {
    echo "1/2";
    $result=mysqli_query($conn,$sql2);
    $user_id=$result->fetch_assoc();
    $user_id=$user_id['user_id_pk'];
    echo $user_id;
    $sql3="INSERT INTO buyer_details
    (buyer_email,buyer_password,buyer_mobile,buyer_address,buyer_pin,user_id_fk)
    VALUES ('$email','$pwd','$mobile','$address','$pin','$user_id') ";
      if (mysqli_query($conn, $sql3)) {
      echo "2/2";
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
