<?php
         $name_to_save = $_GET["name"];
         $data_to_save = $_GET["data"];
        
         $myFile = $name_to_save . ".txt";
         $fh = fopen($myFile, 'a') or die("can't open file");
         fwrite($fh,$data_to_save);
         fclose($fh);
 ?>