<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="home.css">
    <script src="main.js"></script>
</head>
<body>
<div class="nav">
<ul>
<li><a href="home.php">Home</a></li>
  <li><a href="redirect1.php">Login/Logout</a></li>
  <li><a href="redirect.php">Course Catalog</a></li>
  <li><a href="leaderboard.php">Leaderboard</a></li>
  <li><a href="home.php">About</a></li>
</ul>
</div>
<br><br><br>
<h1><b>LOGIN PAGE</b></h1>
<form method="post">
USERNAME:<input type="text" name="uname">
<br><br>
PASSWORD:<input type="password" name="psw"><br><br>
<input type="submit" value="SUBMIT" name="submit">
</body>
</html>

<?php
    $db_connection = pg_connect("dbname=impartus user=postgres password=postgres");
    session_start(); // session start
    include('defines.php');
    $_SESSION['login']=0;
if(isset($_POST['submit']))
{
    $uname=$_POST["uname"];
    $psw=$_POST["psw"];
    $x=pg_query($db_connection,"SELECT * from admin");
    // echo "set";
    while($row=pg_fetch_row($x))
    {
        if($row[0]==$uname && $row[1]==$psw)
        {
            $_SESSION['login']=1;
            $_SESSION['id']=$row[0];
        }
    }
    if($_SESSION['login']==0)
    {
        echo "<h3>Failed to Login.Please Try Again</h3>";
        
    }
    else
    {
        $_SESSION['login']=1;
        redirect('course_catalog.php');
    }
    /*if($result=mysqli_query($conn,$sql))
    {
        while($row=mysqli_fetch_row($result))
        {
            //print_r($row);
            if($row[0]==$uname && $row[1]==$psw)
            {
                $_SESSION['login']=1;
                $_SESSION['uname']=$uname;
                redirect('Home.php');
                echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h3 align='center'>You have Successfully Logged In</h3>";

            }
        }
        echo $_SESSION['login'];
        if($_SESSION['login']==0)
            echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h3 align='center'>Failed to Login.Please Try Again</h3>";
        //mysqli_close($result);
    }*/
    
}

?>

