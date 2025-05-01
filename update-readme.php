<?php
date_default_timezone_set('Asia/Kolkata');
$readme = file_get_contents("README.md");

$currentTime = date("d-m-Y");
$currentTime = strtotime($currentTime);
$currentTime = date('j F Y', $currentTime); 
$updated = preg_replace('/<time>.*<\/time>/', "<time>$currentTime</time>", $readme);

file_put_contents("README.md", $updated);
?>

