<?php
$files = glob('resources/views/*.blade.php');
foreach ($files as $file) {
    $content = file_get_contents($file);
    $original = $content;
    $content = str_replace('Customised+Sports+Betting.svg', 'Customised-Sports-Betting.svg', $content);
    $content = str_replace('Experienced+team.svg', 'Experienced-team.svg', $content);
    $content = str_replace('Multi-currency.svg', 'Multi-currency.svg', $content);
    $content = str_replace('Reliable+End.svg', 'Reliable-End.svg', $content);
    $content = str_replace('Innovative+solutions.svg', 'Innovative-solutions.svg', $content);
    if ($content !== $original) {
        file_put_contents($file, $content);
        echo "Fixed SVG paths in $file\n";
    }
}
