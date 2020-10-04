<?php

$data = $_SERVER['QUERY_STRING'];

//-----------SAVE DATA---------------
$fp = fopen('notification.txt', 'w');
fwrite($fp, $data);
fclose($fp);
//-----------------------------------

echo "1";
?>
