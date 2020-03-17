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
<h1><b>VIDEO LIST</b></h1>
</html>

<?php
    session_start();
    $db_connection = pg_connect("dbname=impartus user=postgres password=postgres");
    $tmp=$_GET['topic'];
    // echo "$tmp";
    $x=pg_query($db_connection,"SELECT professor from topic where name='$tmp'");
    $row=pg_fetch_row($x);
    echo "<br>Professor:".$row[0]." "."<br>";
    $y=pg_query($db_connection,"select * from videos where e_id in (select e_id from professor as p where p.name='$row[0]')");
    while($row=pg_fetch_row($y))
    {
        echo "<br>Video ID:".$row[0];
        echo "<br>Title:".$row[1]." "."<br>";
        echo "<a href='video.php?v_id=$row[0]'>Link to Video</a><br>";
    }
?>
