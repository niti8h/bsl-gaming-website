<?php
function processDirectory($dir) {
    $files = glob($dir . '/*');
    foreach ($files as $file) {
        if (is_dir($file)) {
            processDirectory($file);
        } elseif (is_file($file) && (strpos($file, '.php') !== false || strpos($file, '.html') !== false)) {
            $content = file_get_contents($file);
            $newContent = str_replace('<div class="g-recaptcha" data-sitekey="6LdGs_krAAAAAP0AByhxkCjR45D-axX_s7Ffq7uz"></div>', '', $content);
            $newContent = str_replace('<script src="https://www.google.com/recaptcha/api.js" async defer></script>', '', $newContent);
            if ($newContent !== $content) {
                file_put_contents($file, $newContent);
                echo "Processed: $file\n";
            }
        }
    }
}
processDirectory('resources/views');
processDirectory('public');
