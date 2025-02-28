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
  </style>
</head>
</html>

<?php

include "authguard.php";
include "menu.html";
include "../shared/connection.php";

$result=mysqli_query($conn,"select * from cart C join product P where C.productid= P.pid");
while($dbrow=mysqli_fetch_assoc($result)){
    echo"< class='pdt'>
<div class='name'>'$dbrow[name]</div>
<div class='price'>$dbrow[price]</div>
<img class='pdt-img' srd=$dbrow[impath]>
<div class='price'>$dbrow[detail]</div>
</div>
<div>
    <div class ='text-center'>
        <a href='removecart.php?pid=$dbrow[pid]'>
         <button class ='btn btn-danger'>Remove From Cart</button>
        </a>
    </div>
</div>";
}
?>