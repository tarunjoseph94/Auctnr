<?php
include 'db-connect.php';
if($_REQUEST['id']==1)
{
$sql1='SELECT *, IF(product_bid.current_bid>product_details.product_price,product_bid.current_bid,product_details.product_price) as high_price from product_details LEFT JOIN product_bid on
product_details.product_id_pk=product_bid.product_id ORDER BY product_id_pk ASC';
$i=0;
$flag=0;
$result=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($result)){
  if($i%3==0)
  {?>
      <div class="row">
        <?php
  }?>
    <div class="long-box col-sm-4">
      <div class="item">
        <a href="product-details.php?id=<?php echo $row['product_id_pk']?>">
          <div class="item-img">
            <img src="images/product-img/<?php echo $row['product_image1']?>" object-fit="contain" height="100%" width="100%" />
          </div>
        </a>
        <div class="item-details">
          <p>
            Current Bid  <?php echo $row['high_price']?>
          </p>
          <p>
            <?php echo $row['product_name']?>
          </p>
        </div>
      </div>
    </div>
  <?php
  if($i%3==0 && $flag==1)
  {?>
  </div>
        <?php
  } $i++;
$flag=1;
}

}
elseif($_REQUEST['id']==2)
{
$sql1='SELECT *, IF(product_bid.current_bid>product_details.product_price,product_bid.current_bid,product_details.product_price) as high_price from product_details LEFT JOIN product_bid on
product_details.product_id_pk=product_bid.product_id ORDER BY product_id_pk DESC';
$i=0;
$flag=0;
$result=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($result)){
  if($i%3==0)
  {?>
      <div class="row">
        <?php
  }?>
    <div class="long-box col-sm-4">
      <div class="item">
        <a href="product-details.php?id=<?php echo $row['product_id_pk']?>">
          <div class="item-img">
            <img src="images/product-img/<?php echo $row['product_image1']?>" object-fit="contain" height="100%" width="100%" />
          </div>
        </a>
        <div class="item-details">
          <p>
            Currently Bid <?php echo $row['high_price']?>
          </p>
          <p>
            <?php echo $row['product_name']?>
          </p>
        </div>
      </div>
    </div>
  <?php
  if($i%3==0 && $flag==1)
  {?>
  </div>
        <?php
  } $i++;
$flag=1;
}
}
elseif($_REQUEST['id']==3)
{
$sql1='SELECT *, IF(product_bid.current_bid>product_details.product_price,product_bid.current_bid,product_details.product_price) as high_price from product_details LEFT JOIN product_bid on
product_details.product_id_pk=product_bid.product_id ORDER BY high_price ASC';
$i=0;
$flag=0;
$result=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($result)){
  if($i%3==0)
  {?>
      <div class="row">
        <?php
  }?>
    <div class="long-box col-sm-4">
      <div class="item">
        <a href="product-details.php?id=<?php echo $row['product_id_pk']?>">
          <div class="item-img">
            <img src="images/product-img/<?php echo $row['product_image1']?>" object-fit="contain" height="100%" width="100%" />
          </div>
        </a>
        <div class="item-details">
          <p>
            Current Bid <?php echo $row['high_price']?>
          </p>
          <p>
            <?php echo $row['product_name']?>
          </p>
        </div>
      </div>
    </div>
  <?php
  if($i%3==0 && $flag==1)
  {?>
  </div>
        <?php
  } $i++;
$flag=1;
}

}
elseif($_REQUEST['id']==4)
{
$sql1='SELECT *, IF(product_bid.current_bid>product_details.product_price,product_bid.current_bid,product_details.product_price) as high_price Current Bid product_details LEFT JOIN product_bid on
product_details.product_id_pk=product_bid.product_id ORDER BY high_price DESC';
$i=0;
$flag=0;
$result=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($result)){
  if($i%3==0)
  {?>
      <div class="row">
        <?php
  }?>
    <div class="long-box col-sm-4">
      <div class="item">
        <a href="product-details.php?id=<?php echo $row['product_id_pk']?>">
          <div class="item-img">
            <img src="images/product-img/<?php echo $row['product_image1']?>" object-fit="contain" height="100%" width="100%" />
          </div>
        </a>
        <div class="item-details">
          <p>
            Current Bid <?php echo $row['high_price']?>
          </p>
          <p>
            <?php echo $row['product_name']?>
          </p>
        </div>
      </div>
    </div>
  <?php
  if($i%3==0 && $flag==1)
  {?>
  </div>
        <?php
  } $i++;
$flag=1;
}

}
