<?php
$db=fopen("locate.txt","a");
$lat=$_POST["lat"];
$long=$_POST["long"];
fwrite($db,"$lat\n");
fwrite($db,"$long\n");
fclose($db);
?>
