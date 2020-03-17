<?php
session_start();
include('defines.php');
if($_SESSION['login']==0)
{
    echo "<br><br><h1>Please <a href='login.php'>LOGIN</a> to continue</h1>";
}
else
{
    redirect('course_catalog.php');
}
?>