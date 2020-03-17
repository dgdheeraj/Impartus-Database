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
<h1><b>COURSE CATALOG</b></h1>
</html>

<?php
    session_start();
    $db_connection = pg_connect("dbname=impartus user=postgres password=postgres");
    $x=pg_query($db_connection,"SELECT * FROM Courses");
    $y=pg_query($db_connection,"SELECT * FROM topic");
    echo "<br>";
    while($row=pg_fetch_row($x))
    {
        //$s=implode($row);
        //echo "<br>$s<br>";
        echo "<br>Course ID:".$row[0]."<br>Course Name: ".$row[1]. "<br>Year:  ".$row[2]." Sem".$row[3]."<br>";
        $z=pg_query($db_connection,"SELECT name from topic WHERE c_id='$row[0]'");
        while($r2=pg_fetch_row($z))
        {
            $tmp=$r2[0];
            $send = "topic_desc.php?topic=$tmp";
            echo "<b> List of Topics(Classes):</b>";
            echo "<a href='$send'>$tmp</a><br>";
        }
        //$_SESSION['topic']=$r2[0];
        //$_SESSION['topic']='4E WT';
        //echo $_SESSION['topic'];
    }

?>
