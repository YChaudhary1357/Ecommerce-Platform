<?php
session_start();
if(!isset($_SESSION['login_status']))
{
    echo"Illegel attempt to Login";
    die;
}
if($_SESSION['login_status']==false)
{
    echo"unauthorised access";
    die;
}
// if($_SESSION['usertype']!='Customer')
// {
//     echo"Forbidden Access";
//     die;
// }
?>