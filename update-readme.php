<?php
date_default_timezone_set('Asia/Kolkata');
$readme = file_get_contents("README.md");

$currentTime = date("d-m-Y");
$withTime = date("d-m-Y H:m:s");
$currentTime = strtotime($currentTime);
$currentTime = date('j F Y', $currentTime); 
$randomNumber = random_int(1, 100);
$updated = preg_replace('/<time>.*<\/time>/', "<time>$currentTime<!---$withTime--->::$randomNumber</time>", $readme);
echo $updated;

file_put_contents("README.md", $updated);
?>

