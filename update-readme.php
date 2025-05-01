<?php
date_default_timezone_set('Asia/Kolkata');
$readme = file_get_contents("README.md");

$currentTime = date("Y-m-d H:i:s");
$updated = preg_replace('/<time>.*<\/time>/', "<time>$currentTime</time>", $readme);

file_put_contents("README.md", $updated);
?>

