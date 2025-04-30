<?php
date_default_timezone_set('Asia/Kolkata'); // Set your timezone
$readme = file_get_contents("README.md");

$currentTime = date("Y-m-d H:i:s");
$updated = preg_replace('/{{time}}/', $currentTime, $readme);

file_put_contents("README.md", $updated);
?>

