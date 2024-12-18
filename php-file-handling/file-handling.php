<?php 

$file = fopen("data.txt", "r");
$content = fread($file, filesize("data.txt"));
echo $content;
fclose($file);
?>