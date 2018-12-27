        <form method="POST" enctype="multipart/form-data">
        Enter the product name
        <input type="text" class="form-control" id="prod_name" />
        Enter the product description
        <textarea id="prod_description" class="form-control"></textarea>
        Enter the starting price of the product
        <input type="text" class="form-control" id="prod_price" />
        Please Upload the thumbnail image
        <br />
        Only jpg and png extennsion files are allowed
        <br />
        <input type="file"   id="prod_img1">
        <br />
        Please Upload the second image
        <br />
        <input type="file" id="prod_img2">
        <br />
        Please Upload the third image
        <br />
        <input type="file" id="prod_img3">
        <br />
        <button class="btn active mt-30 mb-30" id="add-product-submit" >Add product</button>
        <input type="reset" class="btn mt-30 mb-30" />
      </form>
      <div class="test">

      </div>';

<script>

  $('#add-product-submit').on('click', function (event) {
    //alert("clicked");
    event.preventDefault();
    var prod_name=document.getElementById("prod_name").value;
    var prod_description=document.getElementById("prod_description").value;
    var prod_price=document.getElementById("prod_price").value;
    var prod_img1=document.getElementById("prod_img1");
    var prod_img2=document.getElementById("prod_img2");
    var prod_img3=document.getElementById("prod_img3");
    if (prod_name == "") {
      alert(" Please enter your product name ");
      $('html, body').animate({
        scrollTop: ($('#prod_name').offset().top)
      }, 500);
      return false;
    }
    if (prod_description == "") {
      alert(" Please enter your product description ");
      $('html, body').animate({
        scrollTop: ($('#prod_description').offset().top)
      }, 500);
      return false;
    }
    if (prod_price == "") {
      alert(" Please enter your product price ");
      $('html, body').animate({
        scrollTop: ($('#prod_name').offset().top)
      }, 500);
      return false;
    }
    if (prod_img1 == "") {
      alert(" Please upload image 1 ");
      $('html, body').animate({
        scrollTop: ($('#prod_img1').offset().top)
      }, 500);
      return false;
    }
    if (prod_img2 == "") {
      alert("  Please upload image 2 ");
      $('html, body').animate({
        scrollTop: ($('#prod_img2').offset().top)
      }, 500);
      return false;
    }
    if (prod_img3 == "") {
      alert("  Please upload image 3 ");
      $('html, body').animate({
        scrollTop: ($('#prod_img3').offset().top)
      }, 500);
      return false;
    }
        else {
          //alert("2");
          var formData=new FormData();
          formData.append('product_name',prod_name);
          formData.append('product_description',prod_description);
          formData.append('product_price',prod_price);
          formData.append('product_img1',prod_img1.files[0]);
          formData.append('product_img2',prod_img2.files[0]);
          formData.append('product_img3',prod_img3.files[0]);
           for (var pair of formData.entries()) {
           console.log(pair[0]+ ', ' + pair[1]);
          }
          $.ajax({
          type: "POST",
          url: "product_add_ajax.php",
          processData: false,
          contentType: false,
          data:formData,
          success:function(result)
          {
            //alert("1");

          window.location.replace("http://localhost/Trackr/product-details.php?id="+result);
          }
          });
        }});
</script>
