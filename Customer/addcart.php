<?php

$pid=$_GET['pid'];
include "authguard.php";
include "../shared/connection.php";

$result=mysqli_query($conn,"insert into cart(userid,productid)values({$_SESSION['userid']},{$pid})");
header("location:viewcart.php");

?>