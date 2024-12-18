<?php 
$file = fopen("data.txt", " ");
$content = fread($file, filesize("data.txt"));
echo $content;
fclose($file);
?>