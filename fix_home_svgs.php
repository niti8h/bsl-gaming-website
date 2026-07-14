<?php
$blade = 'resources/views/home.blade.php';
$content = file_get_contents($blade);
$content = str_replace('Customised+Sports+Betting.svg', 'Customised-Sports-Betting.svg', $content);
$content = str_replace('Experienced+team.svg', 'Experienced-team.svg', $content);
$content = str_replace('Multi-currency.svg', 'Multi-currency.svg', $content);
$content = str_replace('Reliable+End.svg', 'Reliable-End.svg', $content);
$content = str_replace('Innovative+solutions.svg', 'Innovative-solutions.svg', $content);
file_put_contents($blade, $content);
echo "Fixed SVG paths in home.blade.php\n";
