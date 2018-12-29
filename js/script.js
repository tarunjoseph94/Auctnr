
//signup validation

$(document).ready(function () {
  $('#signup-buy-submit').on('click', function (event) {

		event.preventDefault();
    var email=document.getElementById("email").value;
    var pwd=document.getElementById("pwd").value;
    var conpwd=document.getElementById("conpwd").value;
    var mobileno=document.getElementById("mobileno").value;
    var address=document.getElementById("address").value;
    var pin=document.getElementById("pin").value;
		var pattern = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
    if (email == "") {
      alert(" Please enter your E-mail address ");
      $('html, body').animate({
        scrollTop: ($('#email').offset().top)
      }, 500);
      return false;
    }
    if (!pattern.test(email)) {
      alert("The E-mail address you have entered is invalid");
      $('html, body').animate({
        scrollTop: ($('#email').offset().top)
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
          formData.append('email',email);
          formData.append('password',pwd);
          formData.append('mobile',mobileno);
          formData.append('address',address);
          formData.append('pin',pin);
          //  for (var pair of formData.entries()) {
          //  console.log(pair[0]+ ', ' + pair[1]);
          //}
          $.ajax({
          type: "POST",
          url: "buyer_signup_ajax.php",
          processData: false,
          contentType: false,
          data:formData,
          success:function(result)
          {
            $("#test").html(result);
            alert("You account has been registered please log in");
            window.location.replace("http://localhost/PHP-Project/login.php");
          }
          });
        }
	});

  $('#signup-sell-submit').on('click', function (event) {

		event.preventDefault();
    var email=document.getElementById("email").value;
    var name=document.getElementById("name").value;
    var pwd=document.getElementById("pwd").value;
    var conpwd=document.getElementById("conpwd").value;
    var mobileno=document.getElementById("mobileno").value;
    var address=document.getElementById("address").value;
    var pin=document.getElementById("pin").value;
		var pattern = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
    if (email == "") {
      alert(" Please enter your E-mail address ");
      $('html, body').animate({
        scrollTop: ($('#email').offset().top)
      }, 500);
      return false;
    }
    if (!pattern.test(email)) {
      alert("The E-mail address you have entered is invalid");
      $('html, body').animate({
        scrollTop: ($('#email').offset().top)
      }, 500);
      return false;
    }
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
          formData.append('email',email);
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
          url: "seller_signup_ajax.php",
          processData: false,
          contentType: false,
          data:formData,
          success:function(result)
          {
            $("#test").html(result);
            alert("You account has been registered please log in");
            window.location.replace("http://localhost/PHP-Project/login_seller.php");
          }
          });
        }

	});
  $('#login-buyer-submit').on('click', function (event) {

		event.preventDefault();
    var email=document.getElementById("email").value;
    var pwd=document.getElementById("pwd").value;
  	var pattern = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
    if (email == "") {
      alert(" Please enter your E-mail address ");
      $('html, body').animate({
        scrollTop: ($('#email').offset().top)
      }, 500);
      return false;
    }
    if (!pattern.test(email)) {
      alert("The E-mail address you have entered is invalid");
      $('html, body').animate({
        scrollTop: ($('#email').offset().top)
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

        else {
          var formData=new FormData();
          formData.append('email',email);
          formData.append('password',pwd);
          //  for (var pair of formData.entries()) {
          //  console.log(pair[0]+ ', ' + pair[1]);
          //}
          $.ajax({
          type: "POST",
          url: "buyer_login_ajax.php",
          processData: false,
          contentType: false,
          data:formData,
          success:function(result)
          {
            $("#test").html(result);
            window.location.replace("http://localhost/PHP-Project/index.php");
          }
          });
        }
	});
  $('#login-seller-submit').on('click', function (event) {

    event.preventDefault();
    var email=document.getElementById("email").value;
    var pwd=document.getElementById("pwd").value;
    var pattern = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
    if (email == "") {
      alert(" Please enter your E-mail address ");
      $('html, body').animate({
        scrollTop: ($('#email').offset().top)
      }, 500);
      return false;
    }
    if (!pattern.test(email)) {
      alert("The E-mail address you have entered is invalid");
      $('html, body').animate({
        scrollTop: ($('#email').offset().top)
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

        else {
          var formData=new FormData();
          formData.append('email',email);
          formData.append('password',pwd);
          //  for (var pair of formData.entries()) {
          //  console.log(pair[0]+ ', ' + pair[1]);
          //}
          $.ajax({
          type: "POST",
          url: "seller_login_ajax.php",
          processData: false,
          contentType: false,
          data:formData,
          success:function(result)
          {
            alert(result);
            window.location.replace("http://localhost/PHP-Project/index.php");
          }
          });
        }
  });
  $('#logout').on('click', function (event) {

    event.preventDefault();
          $.ajax({
          url: "logout.php",
          success:function(result){
            $("#div1").html(result);
            window.location.replace("http://localhost/PHP-Project/index.php");
          }});

  });
  $('#seller-add-product').on('click', function (event) {

    event.preventDefault();
          $.ajax({
          url: "add_product_form.php",
          success:function(result){
            $("#seller_info").html(result);
          }});

  });
  $('#seller-my-profile').on('click', function (event) {

    event.preventDefault();
          $.ajax({
          url: "edit_seller_profile.php",
          success:function(result){
            $("#seller_info").html(result);
          }});

  });
  $('#seller-my-products').on('click', function (event) {

    event.preventDefault();
          $.ajax({
          url: "seller_product_list.php",
          success:function(result){
            $("#seller_info").html(result);
          }});

  });

  $('#sort-shop').on('change', function () {
      //alert( this.value );
    event.preventDefault();
          $.ajax({
          url: "get_product_details_sort.php?id="+this.value,
          success:function(result){
            $("#sorted").html(result);
          }});

  });

  $('#buyer-my-profile').on('click', function (event) {

    event.preventDefault();
          $.ajax({
          url: "edit_buyer_profile.php",
          success:function(result){
            $("#buyer_info").html(result);
          }});

  });
  $('#add-buyer-bid').on('click', function (event) {
        event.preventDefault();
    var id=document.getElementById("product-id").value;
    var bid=document.getElementById("new-bid").value;
    var oldbid=document.getElementById("current-bid").value;

    if(bid>oldbid)
    {


          $.ajax({
          url: "update_product_bid.php?id="+id+"&bid="+bid,
          success:function(result){
            alert(result);
          }});
    }
    else {
      alert("Please bid amount greater then the current price");

      $('html, body').animate({
        scrollTop: ($('#new-bid').offset().top)
      }, 500);

      return false;

    }
  });
  $('#buyer-my-products').on('click', function (event) {

    event.preventDefault();
          $.ajax({
          url: "buyer_product_list.php",
          success:function(result){
            $("#buyer_info").html(result);
          }});

  });
  $('#login-admin-submit').on('click', function (event) {

    event.preventDefault();
    var email=document.getElementById("email").value;
    var pwd=document.getElementById("pwd").value;
    if (email == "") {
      alert(" Please enter your Login ");
      $('html, body').animate({
        scrollTop: ($('#email').offset().top)
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

        else {
          var formData=new FormData();
          formData.append('email',email);
          formData.append('password',pwd);
          //  for (var pair of formData.entries()) {
          //  console.log(pair[0]+ ', ' + pair[1]);
          //}
          $.ajax({
          type: "POST",
          url: "admin_login_ajax.php",
          processData: false,
          contentType: false,
          data:formData,
          success:function(result)
          {
            alert(result);
            window.location.replace("http://localhost/PHP-Project/index.php");
          }
          });
        }
  });


});
