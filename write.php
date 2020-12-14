<?php
    $txtcontent = $_REQUEST['txt'];
    $fp = fopen('file.txt', 'w');
    fwrite($fp, $txtcontent);
    fclose($fp);
?>
