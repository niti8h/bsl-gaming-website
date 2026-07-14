<?php
// Rename files
$dir = 'public/img/aws-images/';
$files = glob($dir . '*+*.svg');
foreach ($files as $file) {
    $newName = str_replace('+', '-', $file);
    rename($file, $newName);
    echo "Renamed $file to $newName\n";
}

// Update blade file
$blade = 'resources/views/about-us.blade.php';
$content = file_get_contents($blade);
$content = str_replace('Customised+Sports+Betting.svg', 'Customised-Sports-Betting.svg', $content);
$content = str_replace('Experienced+team.svg', 'Experienced-team.svg', $content);
$content = str_replace('Multi-currency.svg', 'Multi-currency.svg', $content);
$content = str_replace('Reliable+End.svg', 'Reliable-End.svg', $content);
$content = str_replace('Innovative+solutions.svg', 'Innovative-solutions.svg', $content);
file_put_contents($blade, $content);
echo "Updated SVG names in about-us.blade.php\n";
