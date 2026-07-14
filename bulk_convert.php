<?php

$backupDir = __DIR__ . '/static_backup';
$viewsDir = __DIR__ . '/resources/views';

// Find all index.html files
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($backupDir));
$htmlFiles = [];
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getFilename() === 'index.html') {
        $htmlFiles[] = $file->getPathname();
    }
}

foreach ($htmlFiles as $filePath) {
    // Determine the view name based on folder structure
    $relativePath = str_replace($backupDir . '/', '', $filePath);
    
    // If it's the root index.html, name it 'home'
    if ($relativePath === 'index.html') {
        $viewName = 'home';
    } else {
        // e.g. about-us/index.html -> about-us
        $viewName = dirname($relativePath);
    }
    
    // Read the file
    $content = file_get_contents($filePath);
    
    // Extract content between </header> and <footer
    $headerEndPos = strpos($content, '</header>');
    $footerStartPos = strpos($content, '<footer');
    
    if ($headerEndPos !== false && $footerStartPos !== false) {
        $headerEndPos += strlen('</header>');
        $mainContent = substr($content, $headerEndPos, $footerStartPos - $headerEndPos);
        
        // Link Cleanup
        // 1. Convert absolute wagergeeks URLs to relative
        // e.g., https://www.wagergeeks.com/about-us/ -> /about-us/
        $mainContent = preg_replace('/href="https?:\/\/(?:www\.)?wagergeeks\.com\/?([^"]*)"/i', 'href="/$1"', $mainContent);
        
        // 2. Convert all other external links to #
        // To be safe, we only want to target <a href="..."> not <link href="...">
        // We match <a ... href="http..."
        $mainContent = preg_replace('/(<a\s+[^>]*href=")https?:\/\/[^"]+("[^>]*>)/i', '$1#$2', $mainContent);

        // JSON-LD Escaping for Blade (Replace "@ with "@@)
        $mainContent = str_replace('{"@', '{"@@', $mainContent);
        $mainContent = str_replace(',"@', ',"@@', $mainContent);
        
        // Construct the Blade view
        $bladeContent = "@extends('layouts.app')\n@section('content')\n" . $mainContent . "\n@endsection\n";
        
        // Save the Blade view
        $bladePath = $viewsDir . '/' . $viewName . '.blade.php';
        if (!is_dir(dirname($bladePath))) {
            mkdir(dirname($bladePath), 0777, true);
        }
        file_put_contents($bladePath, $bladeContent);
        
        echo "Converted $relativePath to $viewName.blade.php\n";
    }
}

// Clean up links in app.blade.php as well
$appBladePath = $viewsDir . '/layouts/app.blade.php';
if (file_exists($appBladePath)) {
    $appContent = file_get_contents($appBladePath);
    $appContent = preg_replace('/href="https?:\/\/(?:www\.)?wagergeeks\.com\/?([^"]*)"/i', 'href="/$1"', $appContent);
    $appContent = preg_replace('/(<a\s+[^>]*href=")https?:\/\/[^"]+("[^>]*>)/i', '$1#$2', $appContent);
    file_put_contents($appBladePath, $appContent);
    echo "Cleaned up links in app.blade.php\n";
}
