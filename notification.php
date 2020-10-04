<?php

$data = "dsaada";

//-----------SAVE DATA---------------
$fp = fopen('notification.txt', 'w');
fwrite($fp, $data);
fclose($fp);
//-----------------------------------

echo "2";
?>
