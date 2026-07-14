<?php
$bladeFile = 'resources/views/about-us.blade.php';
$content = file_get_contents($bladeFile);
// Revert back from {{ asset('img/aws-images/...') }} to /img/aws-images/...
$content = preg_replace('/\{\{\s*asset\(\'img\/aws-images\/([^\']+)\'\)\s*\}\}/', '/img/aws-images/$1', $content);
file_put_contents($bladeFile, $content);
echo "Reverted image paths in about-us.blade.php\n";
