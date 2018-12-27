<?php
session_start();
include 'db-connect.php';
$user_id=$_SESSION['user_id'];
$product_name=$_POST['product_name'];
$product_desciption=$_POST['product_description'];
$product_price=$_POST['product_price'];
date_default_timezone_set('Asia/Calcutta');
$time = date('H:i:s');
$date = date('d-m-Y');
$sql1="INSERT INTO product_details
(user_id,product_name,product_description,product_price,upload_date,upload_time)
VALUES('$user_id','$product_name','$product_desciption','$product_price','$date','$time')";
if(mysqli_query($conn,$sql1))
{
  $sql2="SELECT product_id_pk FROM product_details WHERE upload_date='$date' AND upload_time='$time'";
  if($result=mysqli_query($conn,$sql2))
  {
      $product=$result->fetch_assoc();
      $product_id=$product['product_id_pk'];
      $target_dir = "images/product-img/";
      $temp = explode(".", $_FILES["product_img1"]["name"]);
      $newfilename = $product_id.'1'. '.' . end($temp);
      $target_file = $target_dir . $newfilename;
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["product_img1"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["product_img1"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {

          if (move_uploaded_file($_FILES["product_img1"]["tmp_name"], $target_file)) {
              //echo "The file ". basename( $_FILES["product_img1"]["name"]). " has been uploaded.";
              $sql4="UPDATE product_details SET product_image1='$newfilename' WHERE product_id_pk='$product_id'";
              mysqli_query($conn,$sql4);
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }

      $target_dir = "images/product-img/";
      $temp = explode(".", $_FILES["product_img2"]["name"]);
      $newfilename = $product_id.'2'. '.' . end($temp);
      $target_file = $target_dir . $newfilename;
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["product_img2"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["product_img2"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {

          if (move_uploaded_file($_FILES["product_img2"]["tmp_name"], $target_file)) {
              //echo "The file ". basename( $_FILES["product_img2"]["name"]). " has been uploaded.";
              $sql5="UPDATE product_details SET product_image2='$newfilename' WHERE product_id_pk='$product_id'";
              mysqli_query($conn,$sql5);
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }

      $target_dir = "images/product-img/";
      $temp = explode(".", $_FILES["product_img3"]["name"]);
      $newfilename = $product_id.'3'. '.' . end($temp);
      $target_file = $target_dir . $newfilename;
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["product_img3"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["product_img3"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {

          if (move_uploaded_file($_FILES["product_img3"]["tmp_name"], $target_file)) {
            //  echo "The file ". basename( $_FILES["product_img3"]["name"]). " has been uploaded.";
              $sql6="UPDATE product_details SET product_image3='$newfilename' WHERE product_id_pk='$product_id'";
              mysqli_query($conn,$sql6);
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }
      echo $product_id;
  }
  else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
  }
}
else {
  echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}


?>
