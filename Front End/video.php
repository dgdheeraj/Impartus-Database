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
<h1><b>VIDEO</b></h1>
</body>
</html>

<?php
    session_start();
    $db_connection = pg_connect("dbname=impartus user=postgres password=postgres");
    $tmp=$_GET['v_id'];
    // echo "$tmp";
    $x=pg_query($db_connection,"SELECT * from videos where v_id='$tmp'");
    echo "<br><br>";
    while($row=pg_fetch_row($x))
    {
        echo "<b>Video ID:</b> ".$row[0]."<br><b>Title:</b> ".$row[1]."<br>";
        echo "<br><br><b>Duration(in min):</b> ".$row[2]."<br><br><b>Description:</b> ".$row[3]."<br><br><b>Date:</b> ".$row[5]."<br><br> ";
        echo "<a href='forum.php?v_id=$tmp'>Link to Forum of this Video</a>";
    }

?>
