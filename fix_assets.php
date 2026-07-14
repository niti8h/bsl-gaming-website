<?php
$appBladePath = __DIR__.'/resources/views/layouts/app.blade.php';

if (file_exists($appBladePath)) {
    $content = file_get_contents($appBladePath);
    
    // Fix wp-content and wp-includes for href, src, and even background images if any
    // Example: href="wp-content/..." -> href="/wp-content/..."
    $content = preg_replace('/(href|src)=([\'"])wp-(content|includes)/i', '$1=$2/wp-$3', $content);
    
    // Just in case there are URLs in inline styles like url("wp-content/...")
    $content = preg_replace('/url\(([\'"]?)wp-content/i', 'url($1/wp-content', $content);
    
    file_put_contents($appBladePath, $content);
    echo "Fixed assets in app.blade.php\n";
} else {
    echo "app.blade.php not found.\n";
}

// Let's also check if there are any other files that need this (all views)
$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__.'/resources/views'));
$count = 0;
foreach ($dir as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        $orig = $content;
        
        $content = preg_replace('/(href|src)=([\'"])wp-(content|includes)/i', '$1=$2/wp-$3', $content);
        $content = preg_replace('/url\(([\'"]?)wp-content/i', 'url($1/wp-content', $content);
        
        if ($content !== $orig) {
            file_put_contents($file->getPathname(), $content);
            $count++;
        }
    }
}
echo "Fixed assets in $count views.\n";
