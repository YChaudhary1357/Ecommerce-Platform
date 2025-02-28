<?php
session_start();

$_SESSION['login_status']=false;
$conn=new mysqli("localhost","root","mysql","project");
$uname=$_POST['username'];
$upwd=$_POST['password'];
$result=mysqli_query($conn,"select* from user where username='$uname' and password='$upwd'");
print_r($result);

echo"<br/>";

if($result->num_rows>0)
{
    echo"login sucessful";
    $_SESSION['login_status']=true;
    $_SESSION['usertype']=$dbrow['usertype'];
    $_SESSION['userid']=$dbrow['userid'];
    $_SESSION['username']=$dbrow['username'];
    $dbrow=mysqli_fetch_assoc($result);
    echo"<br/>";
    print_r($dbrow);

    if($dbrow['usertype']=='Vendor'){
        header("location:../Vendor/home.php");
    }
    else{
        header("location:../Customer/home.php");
    }
}
else{
    echo"login failed";
}
?>