<?php
// 1. Fix SVG colors
$dir = 'public/img/aws-images/';
$files = glob($dir . '*.svg');
foreach ($files as $file) {
    $content = file_get_contents($file);
    // Replace the pink hex colors with Royal Gold (#D4AF37) and a slightly darker gold for gradient
    $newContent = str_ireplace(['#b6359c', '#b30050'], ['#D4AF37', '#C5A028'], $content);
    if ($content !== $newContent) {
        file_put_contents($file, $newContent);
        echo "Updated SVG: $file\n";
    }
}

// 2. Fix broken image paths in about-us.blade.php
$bladeFile = 'resources/views/about-us.blade.php';
$content = file_get_contents($bladeFile);
// Replace src="/img/aws-images/... with src="{{ asset('img/aws-images/...
$content = preg_replace('/src="\/img\/aws-images\/([^"]+)"/', 'src="{{ asset(\'img/aws-images/$1\') }}"', $content);
file_put_contents($bladeFile, $content);
echo "Fixed image paths in about-us.blade.php\n";
