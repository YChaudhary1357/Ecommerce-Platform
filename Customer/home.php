<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  .pdt{
    background-color:bisque;
    display:inline-block;
    margin:10px;
    padding:10px;
    width:300px;
    height:fit-content;
    vertical-align:top;
  }
  .pdt-img{
    width:100%;
    height:75%;
  }
  .name{
    font-size:24px;
    font-weight:bold;
    color:blueviolet;
  }
  .price{
    font-size:25px;
   font-weight:bolder;
  }
  .price::after{
    content:" Rs";
    font-size:12px;
  }
  .details{
    font-size:18px;
  }
  </style>
</head>
</html>
<?php
include "../shared/connection.php";
include "menu.html";

$result=mysqli_query($conn,"select * from product  ");
while($dbrow=mysqli_fetch_assoc($result))
{
echo"<div class='pdt'>
<div class='name'>{$dbrow['name']}</div>
<div class='price'>{$dbrow['price']}</div>
<img class='pdt-img' src='{$dbrow['impath']}'>
<div class='details'>{$dbrow['details']}</div>
<div>
<div class='text-whit text-center'>
<a href='addcart.php?pid=$dbrow[pid]'>
<button class='btn btn-danger'>Add To Cart</button>
</a>
</div>
    </div>
</div>";
}

?>