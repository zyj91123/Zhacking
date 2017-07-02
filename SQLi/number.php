<?php
    $conn = mysql_connect('localhost','root','root') or die('connection failed!');
    mysql_select_db('mytest', $conn);
    $i = $_GET['i'];
    $n = $_GET['n'];
    $sql = 'select * from user where id = '.$i.' and name = \''.$n.'\'';
    $result = mysql_query($sql, $conn) or die(mysql_error());
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print_r($row);
        echo "<br>";
    }
 ?>
