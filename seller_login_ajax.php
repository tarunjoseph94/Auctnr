<?php
include 'db-connect.php';
session_start();
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email=$_POST['email'];

  $pwd=$_POST['password'];
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
}
  if(empty($pwd))
  {
    $flag=1;
  }


  if($flag==0)
  {

    $sql1="SELECT seller_password,user_id_fk from seller_details WHERE seller_email='$email'";
    //echo $sql1;
    $result=mysqli_query($conn,$sql1);
    $user=$result->fetch_assoc();
    $user_id=$user['user_id_fk'];
    $user_pwd=$user['seller_password'];
    //echo $user_pwd;
    //echo " xyz ".$pwd;
    if($pwd==$user_pwd)
    {
      $_SESSION['login_status']=2;
      $_SESSION['user_id']=$user_id;
    //  echo $_SESSION['login_status'];
  //  echo "Sucessfully logged in";
    }
      else {
      echo "Error";
      }

  }
}

?>
