<?php

session_start();
// echo"$_SESSION[userid]";
print_r($_POST);
echo"<br/>";
print_r($_FILES['pdtimg']);

$source=$_FILES['pdtimg']['tmp_name'];
$target="../shared/images/".$_FILES['pdtimg']['name'];

move_uploaded_file($source,$target);

include "../shared/connection.php";

mysqli_query($conn,"insert into product(name,price,details,impath,owner)values('$_POST[pname]',$_POST[pprice],'$_POST[pdetail]','$target',$_SESSION[userid])");
?>