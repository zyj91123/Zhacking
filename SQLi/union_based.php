<?php
    $conn = mysql_connect('localhost','root','root') or die('connection failed!');
    mysql_select_db('mytest', $conn);
    $n = $_GET['n'];
    $sql = 'select * from user where name =\''.$n.'\'';
    $result = mysql_query($sql, $conn);
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print_r($row);
        echo "<br>";
    }
 ?>
