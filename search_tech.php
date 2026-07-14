<?php
$content = file_get_contents('resources/views/about-us.blade.php');
$parts = explode('TECHNOLOGIES', $content);
foreach ($parts as $i => $part) {
    if ($i === 0) continue;
    $context = substr($parts[$i-1], -50) . 'TECHNOLOGIES' . substr($part, 0, 50);
    echo "Match $i: $context\n\n";
}
