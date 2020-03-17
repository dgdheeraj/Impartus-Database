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
<h1><b>ACCOUNT</b></h1>
<form method="post">

<input type="submit" value="LOGOUT" name="logout">
</form>
</html>

<?php
    session_start();
    $type="ahc";
    include('defines.php');
    $db_connection = pg_connect("dbname=impartus user=postgres password=postgres");
    $id=$_SESSION['id'];
    $x=pg_query($db_connection,"SELECT * from student");
    while($r=pg_fetch_row($x))
    {
      // $name=$r[1];
      // $sem=$r[2];
      // $pgm=$r[3];
      // $kp=$r[4];
      if($id==$r[0])
      {
        $type="student";
        $_SESSION['type']='student';
        $a=$_SESSION['type'];
        // echo "$a";
        echo "<br><b>Account Type:</b>STUDENT<br>";
        echo "<b>Name: </b>".$r[1]."<br>";
        echo "<b>Semester: </b>".$r[2]."<br>";
        echo "<b>Karma Points: </b>".$r[3]."<br>";
        $abc=pg_query($db_connection,"SELECT d_name from department WHERE d_id='$r[4]'");
        $w=pg_fetch_row($abc);
        echo "<b>Department</b>:".$w[0]."<br>";
      }  
    }
    $y=pg_query($db_connection,"SELECT * from professor");
    while($r1=pg_fetch_row($y))
    {
      if($id==$r1[0])
      {
        $type="professor";
        $_SESSION['type']='professor';
        $a=$_SESSION['type'];
        //echo "$a";
        echo "<br><b>Account Type:</b>PROFESSOR<br>";
        echo "<b>Name: </b>".$r1[1]."<br>";
        echo "<b>Email: </b>".$r1[2]."<br>";
        echo "<b>Domain: </b>".$r1[4]."<br>";
        $abc=pg_query($db_connection,"SELECT d_name from department WHERE d_id='$r1[5]'");
        $w=pg_fetch_row($abc);
        echo "<b>Department</b>:".$w[0]."<br>";
      }
    }
    if(isset($_POST['logout']))
    {
      $_SESSION['login']=0;
      $_SESSION['id']='';
      $_SESSION['type']='';
      redirect('home.php');
    }

?>
