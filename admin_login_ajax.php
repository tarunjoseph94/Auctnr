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

}
  if(empty($pwd))
  {
    $flag=1;
  }


  if($flag==0)
  {
    $pwd=md5($pwd);
//      echo "11";
    $sql1="SELECT admin_pwd from admin_details WHERE admin_name_pk='$email'";
  //  echo $sql1;
    if($result=mysqli_query($conn,$sql1))
    {
    $user=$result->fetch_assoc();
    $user_pwd=$user['admin_pwd'];
    //echo $user_pwd;
    //echo " xyz ".$pwd;
    if($pwd==$user_pwd)
    {
      $_SESSION['login_status']=3;
    //  $_SESSION['user_id']=$user['user_id_fk'];
      echo "Logged In";
    }
      else {
      echo "Error";
      }
    }
    else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }
  }
}

?>
