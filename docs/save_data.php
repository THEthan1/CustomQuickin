<?php
   header("Content-Type: application/json; charset=UTF-8");
   $location = $_POST["file"];
   $data = $_POST["data"];
   $file = fopen($location,"w");
   echo fwrite($file,$data);
   fclose($file);
?>