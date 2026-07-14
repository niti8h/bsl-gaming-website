<?php
function processDir($dir) {
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            processDir($path);
        } else if (substr($path, -4) === '.php') {
            $content = file_get_contents($path);
            
            $original = $content;
            
            // Standard menus (desktop & mobile)
            $content = preg_replace('/<li[^>]*>\s*<a[^>]*href="[^"]*careers[^"]*"[^>]*>Careers<\/a>\s*<\/li>/i', '', $content);
            
            // Footer links
            $content = preg_replace('/<li class="xpro-infolist-item[^>]*>\s*<a[^>]*href="[^"]*careers[^"]*"[^>]*>[\s\S]*?<p class="xpro-infolist-desc">Careers<\/p>[\s\S]*?<\/a>\s*<\/li>/i', '', $content);
            
            if ($original !== $content) {
                file_put_contents($path, $content);
                echo "Cleaned: $path\n";
            }
        }
    }
}
processDir('resources/views');
