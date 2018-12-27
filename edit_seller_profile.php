<?php
session_start();
$user_id=$_SESSION['user_id'];
include 'db-connect.php';
$sql1="SELECT seller_name,seller_password,seller_mobile,seller_address,seller_pin FROM seller_details WHERE user_id_fk='$user_id'";
if($result=mysqli_query($conn,$sql1))
{

  $seller=$result->fetch_assoc();
}
else {
  echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
?>
        <form method="POST" >
          Update Your name
        <input type="text" class="form-control" value="<?php echo $seller['seller_name']; ?>" id="seller_name" />
          Update your password
        <input type="password" class="form-control" id="seller_password" value="<?php echo $seller['seller_password']; ?>"/>
        Confirm your password
        <input type="password" class="form-control" id="confirm_password" />
        Update your mobile Number
        <input type="text" class="form-control" id="seller_mobile" value="<?php echo $seller['seller_mobile']; ?>" />
        Update Your address
        <textarea id="seller_address" class="form-control"><?php echo $seller['seller_address']; ?></textarea>
        Update your pincode
        <input type="text" class="form-control" id="seller_pincode" value="<?php echo $seller['seller_pin']; ?>"/>
        <button class="btn active mt-30 mb-30" id="update-seller-submit" >Update</button>
        <input type="reset" class="btn mt-30 mb-30" />
      </form>

<script>

  $('#update-seller-submit').on('click', function (event) {
    //alert("clicked");
    var name=document.getElementById("seller_name").value;
    var pwd=document.getElementById("seller_password").value;
    var conpwd=document.getElementById("confirm_password").value;
    var mobileno=document.getElementById("seller_mobile").value;
    var address=document.getElementById("seller_address").value;
    var pin=document.getElementById("seller_pincode").value;

    if (name == "") {
      alert("Please enter your name");

      $('html, body').animate({
        scrollTop: ($('#name').offset().top)
      }, 500);

      return false;
    }
		if (pwd == "") {
			alert("Please Enter your password");

			$('html, body').animate({
				scrollTop: ($('#pwd').offset().top)
			}, 500);

			return false;
		}
    if (conpwd == "") {
      alert("Please confirm your password");


      $('html, body').animate({
        scrollTop: ($('#conpwd').offset().top)
      }, 500);

      return false;
    }


		if (pwd!=conpwd) {
			alert("Pssword and confirmed password do not match");


			$('html, body').animate({
				scrollTop: ($('#pwd').offset().top)
			}, 500);

			return false;
		}


    if (address == "") {
      alert(" Please enter your  address ");
      $('html, body').animate({
        scrollTop: ($('#address').offset().top)
      }, 500);
      return false;
    }

		if (mobileno == "") {
			alert("Please enter your contact number");
			$('html, body').animate({
				scrollTop: ($('#mobileno').offset().top)
			}, 500);
			return false;
		}

		if (isNaN(mobileno)) {
			alert("Number not valid");
			$('html, body').animate({
				scrollTop: ($('#mobileno').offset().top)
			}, 500);
			return false;
		}

    		if (pin == "") {
    			alert("Please enter your contact number");
    			$('html, body').animate({
    				scrollTop: ($('#pin').offset().top)
    			}, 500);
    			return false;
    		}

    		if (isNaN(pin)) {
    			alert("Number not valid");
    			$('html, body').animate({
    				scrollTop: ($('#pin').offset().top)
    			}, 500);
    			return false;
    		}
        else {
          var formData=new FormData();
        //  formData.append('email',email);
          formData.append('password',pwd);
          formData.append('name',name);
          formData.append('mobile',mobileno);
          formData.append('address',address);
          formData.append('pin',pin);
           for (var pair of formData.entries()) {
           console.log(pair[0]+ ', ' + pair[1]);
          }
          $.ajax({
          type: "POST",
          url: "edit_seller_ajax.php",
          processData: false,
          contentType: false,
          data:formData,
          success:function(result)
          {
            $("#test").html(result);
            alert(result);
           window.location.replace("http://localhost/Trackr/sell-profile.php");
          }
          });
        }

	});
</script>
