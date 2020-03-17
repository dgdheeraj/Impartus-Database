<?php
    $db_connection = pg_connect("dbname=impartus user=postgres password=postgres");
    $x=pg_query($db_connection,"SELECT * FROM student");
    while($row=pg_fetch_row($x))
    {
        //$s=implode($row);
        //echo "<br>$s<br>";
        echo "<br>".$row[2],$row[3]."<br>";
    }

?>