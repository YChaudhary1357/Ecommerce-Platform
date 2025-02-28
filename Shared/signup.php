<?php

$conn=new mysqli("localhost","root","mysql","project");
mysqli_query($conn,"insert into user(username,password,usertype)values('$_POST[username]','$_POST[password1]','$_POST[usertype]')");

?>