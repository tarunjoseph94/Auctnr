<?php
session_start();
$user_id=$_SESSION['user_id'];
include 'db-connect.php';
$sql1="SELECT buyer_password,buyer_mobile,buyer_address,buyer_pin FROM buyer_details WHERE user_id_fk='$user_id'";
if($result=mysqli_query($conn,$sql1))
{

  $buyer=$result->fetch_assoc();
}
else {
  echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
?>
      <div class="col-sm-5">
        <form method="POST" >
         Update your password
        <input type="password" class="form-control" id="buyer_password" value="<?php echo $buyer['buyer_password']; ?>"/>
        Confirm your password
        <input type="password" class="form-control" id="confirm_password" />
        Update your mobile Number
        <input type="text" class="form-control" id="buyer_mobile" value="<?php echo $buyer['buyer_mobile']; ?>" />
        Update Your address
        <textarea id="buyer_address" class="form-control"><?php echo $buyer['buyer_address']; ?></textarea>
        Update your pincode
        <input type="text" class="form-control" id="buyer_pincode" value="<?php echo $buyer['buyer_pin']; ?>"/>
        <button class="btn active mt-30 mb-30" id="update-buyer-submit" >Update</button>
        <input type="reset" class="btn mt-30 mb-30" />
      </form>

      </div>

<script>

  $('#update-buyer-submit').on('click', function (event) {
    //alert("clicked");

    var pwd=document.getElementById("buyer_password").value;
    var conpwd=document.getElementById("confirm_password").value;
    var mobileno=document.getElementById("buyer_mobile").value;
    var address=document.getElementById("buyer_address").value;
    var pin=document.getElementById("buyer_pincode").value;


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
          formData.append('password',pwd);
          formData.append('mobile',mobileno);
          formData.append('address',address);
          formData.append('pin',pin);
           for (var pair of formData.entries()) {
           console.log(pair[0]+ ', ' + pair[1]);
          }
          $.ajax({
          type: "POST",
          url: "edit_buyer_ajax.php",
          processData: false,
          contentType: false,
          data:formData,
          success:function(result)
          {
            $("#test").html(result);
            alert(result);
           window.location.replace("http://localhost/PHP-Project/buy_profile.php");
          }
          });
        }

	});
</script>
