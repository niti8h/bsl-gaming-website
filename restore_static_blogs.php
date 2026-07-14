<?php
$sourceDir = 'static_backup/blog';
$destDir = 'resources/views/blog';

if (!is_dir($destDir)) {
    mkdir($destDir, 0755, true);
}

$dirs = array_filter(glob($sourceDir . '/*'), 'is_dir');

foreach ($dirs as $dir) {
    $slug = basename($dir);
    $htmlFile = $dir . '/index.html';
    
    if (file_exists($htmlFile)) {
        $destFile = $destDir . '/' . $slug . '.blade.php';
        $content = file_get_contents($htmlFile);
        file_put_contents($destFile, $content);
    }
}
echo "Restored static blog blade files.\n";
