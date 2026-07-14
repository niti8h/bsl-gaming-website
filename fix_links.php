<?php
$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__.'/resources/views'));
foreach ($dir as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        $orig = $content;
        
        // Match href=".../something/index.html" or href="something/index.html"
        // Replace with href="/something"
        $content = preg_replace('/href="(?:\.\.\/|\.\/)*([a-zA-Z0-9\-_\/]+)\/index\.html"/i', 'href="/$1"', $content);
        
        // Match href=".../index.html" -> href="/"
        $content = preg_replace('/href="(?:\.\.\/|\.\/)*index\.html"/i', 'href="/"', $content);
        
        // Match href=".../something.html" -> href="/something"
        $content = preg_replace('/href="(?:\.\.\/|\.\/)*([a-zA-Z0-9\-_\/]+)\.html"/i', 'href="/$1"', $content);
        
        // Match href=_https_/www.wagergeeks.com/.../index.html
        $content = preg_replace('/href=_https_\/www\.wagergeeks\.com\/([a-zA-Z0-9\-_\/]+)\/index\.html/i', 'href="/$1"', $content);

        if ($content !== $orig) {
            file_put_contents($file->getPathname(), $content);
            echo "Updated " . $file->getFilename() . "\n";
        }
    }
}
echo "Done.\n";
