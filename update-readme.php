<?php
// Example: Update README with current date
$readme = 'README.md';
$content = file_get_contents($readme);

$pattern = '/Last updated: .*?(\n|$)/';
$replacement = 'Last updated: ' . date('Y-m-d H:i:s') . "\n";

if (preg_match($pattern, $content)) {
    $newContent = preg_replace($pattern, $replacement, $content);
} else {
    $newContent = $content . "\n" . $replacement;
}

file_put_contents($readme, $newContent);
