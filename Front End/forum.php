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
</body>
</html>

<?php
    session_start();
    $db_connection = pg_connect("dbname=impartus user=postgres password=postgres");
    $tmp=$_GET['v_id'];
    echo "<h1><b>DISCUSSION FORUM</b></h1>";
    echo "<br><b>Video ID:</b> ".$tmp."<br>";
    $x=pg_query($db_connection,"SELECT * from discussion_forum where v_id='$tmp'");
    $row=pg_fetch_row($x);
    $f_id=$row[0];
    echo "<b>Forum ID:</b> ".$f_id."<br>";
    $y=pg_query($db_connection,"SELECT * from questions where f_id='$f_id'");    
    echo "<a href='addq.php?f_id=$f_id'>Click to Add your Question</a>";
    while($row=pg_fetch_row($y))
    {
        if($row[3]==NULL)
            $val=$row[5];
        else
            $val=$row[3];
        $y1=pg_query($db_connection,"(SELECT name from professor where e_id='$val') UNION(select name from student where srn='$val') ");
        $np=pg_fetch_row($y1);
        // echo "<a href='home.php'>Click to Add your Question</a>";
        echo "<br><b>Question ID:</b> ".$row[0]."<h2><b>Question:</b> ".$row[1]."</h2> ";
        echo "<b>Date Posted:</b> ".$row[2]." <b>Person Posted ID:</b> ".$val."<b> Name:</b>".$np[0]."<br><br> ";
        echo "<a href='addans.php?q_id=$row[0]'>Click to Add your Answer</a>";
        $z=pg_query($db_connection,"SELECT * from answers where q_id='$row[0]'");
        while($row1=pg_fetch_row($z))
        {
            if($row1[4]==NULL)
                $val1=$row1[6];
            else
                $val1=$row1[4];
            $y1a=pg_query($db_connection,"(SELECT name from professor where e_id='$val1') UNION(select name from student where srn='$val1') ");
            $npa=pg_fetch_row($y1a);
            echo "<h2>------><t>Answer:</b>".$row1[3]."</h2>";
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            echo "<b>Date Posted:</b> ".$row1[1]." <b>Person Posted ID:</b> ".$val1."<b> Name:</b>".$npa[0]."<br><br> ";
        }
        
    }

?>
