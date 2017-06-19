<?php
    echo $a = '1'.chr(130).'2'.'<br>';
    echo iconv('utf-8','gbk',$a);
 ?>
