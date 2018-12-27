<?php
include 'db-connect.php';
if($_REQUEST['id']==1)
{
$sql1='SELECT * from product_details';
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
            From <?php echo $row['product_price']?>
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
$sql1='SELECT * from product_details ORDER BY product_id_pk DESC';
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
            From <?php echo $row['product_price']?>
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
$sql1='SELECT * from product_details ORDER BY product_price';
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
            From <?php echo $row['product_price']?>
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
$sql1='SELECT * from product_details ORDER BY product_price DESC';
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
            From <?php echo $row['product_price']?>
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
