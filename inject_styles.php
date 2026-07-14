<?php
$backupDir = __DIR__ . '/static_backup';
$viewsDir = __DIR__ . '/resources/views';
$appBladePath = $viewsDir . '/layouts/app.blade.php';

$appBladeContent = file_get_contents($appBladePath);

// Find all index.html files
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($backupDir));
$htmlFiles = [];
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getFilename() === 'index.html') {
        $htmlFiles[] = $file->getPathname();
    }
}

foreach ($htmlFiles as $filePath) {
    $relativePath = str_replace($backupDir . '/', '', $filePath);
    
    if ($relativePath === 'index.html') {
        $viewName = 'home';
    } else {
        $viewName = dirname($relativePath);
    }
    
    $bladePath = $viewsDir . '/' . $viewName . '.blade.php';
    if (!file_exists($bladePath)) {
        continue;
    }
    
    $content = file_get_contents($filePath);
    $headStartPos = strpos($content, '<head>');
    $headEndPos = strpos($content, '</head>');
    
    if ($headStartPos !== false && $headEndPos !== false) {
        $headContent = substr($content, $headStartPos, $headEndPos - $headStartPos);
        
        // Find all <link ... rel="stylesheet" ... >
        preg_match_all('/<link[^>]+rel=[\'"]stylesheet[\'"][^>]*>/i', $headContent, $links);
        
        $missingStyles = "";
        
        foreach ($links[0] as $link) {
            // Extract the id attribute if any
            if (preg_match('/id=[\'"]([^\'"]+)[\'"]/i', $link, $idMatch)) {
                $id = $idMatch[1];
                if (strpos($appBladeContent, "id='$id'") === false && strpos($appBladeContent, "id=\"$id\"") === false) {
                    $missingStyles .= $link . "\n";
                }
            } else {
                // If no ID, check by href
                if (preg_match('/href=[\'"]([^\'"]+)[\'"]/i', $link, $hrefMatch)) {
                    $href = basename($hrefMatch[1]);
                    if (strpos($appBladeContent, $href) === false) {
                        $missingStyles .= $link . "\n";
                    }
                }
            }
        }
        
        // Also capture <style>...</style> blocks that might be specific (like elementor custom styles)
        preg_match_all('/<style[^>]*>.*?<\/style>/is', $headContent, $styles);
        foreach ($styles[0] as $style) {
            // We can just add all inline styles since they are usually page-specific or we can try to filter
            // Let's check if this exact style block is in app.blade.php
            if (strpos($appBladeContent, $style) === false) {
                // But wait, there is a giant inline style in app.blade.php for the global fonts.
                // Let's only add it if it's less than 5000 chars and not already in app.blade.php to be safe
                // Or maybe we just add it anyway.
                if (strlen($style) < 100000) {
                    $missingStyles .= $style . "\n";
                }
            }
        }

        if (!empty($missingStyles)) {
            // Fix relative paths in $missingStyles
            $missingStyles = preg_replace('/href="(?:\.\.\/|\.\/)*([a-zA-Z0-9\-_\/]+)\/index\.html"/i', 'href="/$1"', $missingStyles);
            $missingStyles = preg_replace('/href="(?:\.\.\/|\.\/)*index\.html"/i', 'href="/"', $missingStyles);
            $missingStyles = preg_replace('/href="(?:\.\.\/|\.\/)*([a-zA-Z0-9\-_\/]+)\.html"/i', 'href="/$1"', $missingStyles);
            
            // Fix wp-content/wp-includes
            $missingStyles = preg_replace('/(href|src)=([\'"])(?:\.\.\/)*wp-(content|includes)/i', '$1=$2/wp-$3', $missingStyles);
            
            // Read blade
            $bladeContent = file_get_contents($bladePath);
            
            // If we already pushed styles, remove the old one (so we can re-run)
            $bladeContent = preg_replace('/@push\(\'styles\'\).*?@endpush/is', '', $bladeContent);
            
            $pushBlock = "@push('styles')\n" . trim($missingStyles) . "\n@endpush\n";
            
            // Prepend after @section('content')
            $bladeContent = preg_replace('/(@section\(\'content\'\))/i', "$1\n$pushBlock", $bladeContent);
            
            file_put_contents($bladePath, $bladeContent);
            echo "Injected missing styles to $viewName.blade.php\n";
        }
    }
}
echo "Done Injecting.\n";
