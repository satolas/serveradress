<?php
    if(!isset($_POST["ip"])) 
    {
        echo ("NO DATA RECIEVED");
        return;
    }

    $action = $_POST["ip"];
    $date = date('Y/m/d H:i:s');
    $data = "{$action},{$date}\n";
    $myFile = "TestingData.txt";

    if(file_put_contents($myFile, $data, FILE_APPEND))
        echo ("success");
    else
        echo ("failed to write file);
 ?>