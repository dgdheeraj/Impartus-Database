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
<br><br><br><br>
<h2>LEADEBOARD</h2>
</body>
</html>

<?php
    $db_connection = pg_connect("dbname=impartus user=postgres password=postgres");
    $x=pg_query($db_connection,"SELECT * FROM student ORDER BY karma_points DESC");
    echo "<br>";
    $count=1;
    while($row=pg_fetch_row($x))
    {
        //$s=implode($row);
        //echo "<br>$s<br>";
        echo "<br>".$count."  ".$row[1]. "  ".$row[2],$row[3]."<br>";
        if($count==10)
            break;
        $count=$count+1;
    }

?>