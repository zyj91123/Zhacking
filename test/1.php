<?php
    $conn = mysql_connect('localhost','root','root') or die('connection failed!');
    mysql_select_db('mytest', $conn);
    $id = $_GET['id'];
    $sql = "select * from user where id = $id";
    $result = mysql_query($sql, $conn) or die(mysql_error());
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print_r($row);
        echo "<br>";
    }
 ?>
