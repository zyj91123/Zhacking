<?php
    $conn = mysql_connect('localhost','root','root') or die('connection failed!');
    mysql_select_db('mytest', $conn);
    $n = $_GET['n'];
    $sql = 'select * from user where name =\''.$n.'\'';
    $result = mysql_query($sql, $conn) or die(mysql_error());
 ?>
