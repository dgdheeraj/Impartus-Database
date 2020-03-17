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
<h1><b>Add Ques</b></h1>
<form  method="post">
<!--Generate random q_id-->
QUESTION: <input type="text" name="question" required><br>
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
    if(isset($_POST['submit']))
{
    
    $db_connection = pg_connect("dbname=impartus user=postgres password=postgres");
    $tmp=$_GET['f_id'];
    // echo "<br><br>$tmp";
    $question=$_POST['question'];

    $date=date("Y-m-d");
    // $e_id=$_POST['e_id'];
    // $srn=$_POST['srn'];
    if($a=='student')
    {
        echo "$a";
        $srn=$_SESSION['id'];
        $e_id='NULL';
    }
    if($a=='professor')
    {
        echo "$a";
        $e_id=$_SESSION['id'];
        $srn='NULL';
    }

    $ran=rand();
    $q_id='q'.$ran;
    echo "$q_id $question $date $e_id $tmp $srn";
    $q_id=pg_escape_string($q_id);
    $question=pg_escape_string($question);
    $date=pg_escape_string($date);
    $e_id=pg_escape_string($e_id);
    $tmp=pg_escape_string($tmp);
    $srn=pg_escape_string($srn);
    //$x=pg_query($db_connection,"SELECT * from videos where v_id='$tmp'");
    if($e_id=='NULL')
        $xad=pg_query($db_connection,"INSERT INTO questions values('$q_id','$question','$date',NULL,'$tmp','$srn')");
    if($srn=='NULL')
        $x=pg_query($db_connection,"INSERT INTO questions values('$q_id','$question','$date','$e_id','$tmp',NULL)");
}
?>
