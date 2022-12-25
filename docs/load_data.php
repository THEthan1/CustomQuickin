<?php
header("Content-Type: application/json; charset=UTF-8");
$location = $_POST["file"];
$file = fopen($location, "r");
echo fread($file,filesize($location));
fclose($file);
?>