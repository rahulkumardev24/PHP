<?php

$file = "../file_create/myFiles/dummy.txt"; 
// r -> Read
$myFile = fopen($file , "r") or die("unable to read file");
echo fread($myFile,filesize($file));
fclose($myFile);

?>



