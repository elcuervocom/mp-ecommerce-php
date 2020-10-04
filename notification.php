<?php
$json = file_get_contents('php://input');
$data=json_decode($json);


$fp = fopen(time()."_".rand(100,999).'.txt', 'w');
fwrite($fp, $json);
fclose($fp);

echo "2";
?>
