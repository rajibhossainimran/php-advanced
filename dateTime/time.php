<?php
$date = new DateTime("now", new DateTimeZone("Asia/Dhaka"));
echo $date->format("Y-m-d H:i:s");
?>