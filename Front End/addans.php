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
<h1><b>Add Answer</b></h1>
<form  method="post">
ANSWER: <input type="text" name="answer" required><br>
<!-- DATE: <input type="date" name="date"><br> -->
<!-- EMPLOYEE ID(NULL if not applicable): <input type="text" name="e_id"><br> -->
<!-- STUDENT ID(NULL if not applicable): <input type="text" name="srn"><br> -->
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>

<?php
    session_start();
    $a=$_SESSION['type'];
    echo "$a";
    if(isset($_POST['submit']))
    {
    $db_connection = pg_connect("dbname=impartus user=postgres password=postgres");
    
    $answer=$_POST['answer'];
    $date=date("Y-m-d");
    $tmp=$_GET['q_id'];
    echo "<br><br>$tmp";
    if($a=='student')
    {
        //echo "$a";
        $srn=$_SESSION['id'];
        $e_id='NULL';
    }
    if($a=='professor')
    {
        //echo "$a";
        $e_id=$_SESSION['id'];
        $srn='NULL';
    }
    //echo "$answer $date $e_id $srn";
    $ran=rand();
    $a_id=  'a'.$ran;
    //echo "$a_id";
    if($e_id=='NULL')
    {
        $x=pg_query("INSERT INTO answers values('$a_id','$date',0,'$answer','$srn','$tmp',NULL)");
    }
    if($srn=='NULL')
        $x=pg_query("INSERT INTO answers values('$a_id','$date',0,'$answer',NULL,'$tmp','$e_id')");
    
    }
?>
