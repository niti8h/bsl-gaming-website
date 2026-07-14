<?php
$files = [
    'resources/views/layouts/app.blade.php',
    'resources/views/ai-sportsbook-risk-management.blade.php',
    'resources/views/instant-assist.blade.php',
    'resources/views/telegram-software-development.blade.php'
];

foreach ($files as $file) {
    if (!file_exists($file)) continue;
    $content = file_get_contents($file);
    
    // Replace the button wrappers with an empty string if they contain href="#"
    // It's a bit tricky to parse HTML with regex, so we'll look for the specific block patterns.
    
    // Pattern for elementor buttons (like Follow us, Visit Us)
    $pattern1 = '/<div class="elementor-element[^>]*data-widget_type="button.default"[^>]*>.*?<a[^>]*href="#"[^>]*>.*?<\/a>.*?<\/div>\s*<\/div>/is';
    
    // Pattern for xpro buttons
    $pattern2 = '/<div class="elementor-element[^>]*data-widget_type="xpro-button.default"[^>]*>.*?<a[^>]*href="#"[^>]*>.*?<\/a>.*?<\/div>\s*<\/div>/is';

    // A simpler approach is to find the link and replace it with nothing, but that leaves empty wrappers.
    // Let's just remove the <a> tag and its contents.
    $pattern3 = '/<a[^>]*href="#"[^>]*>.*?<\/a>/is';

    // Wait, let's just do a simpler search and replace for the exact <a> blocks we found:
    // In layouts/app.blade.php:
    $content = preg_replace('/<div class="elementor-widget-container">\s*<div class="elementor-button-wrapper">\s*<a class="elementor-button elementor-button-link elementor-size-sm" href="#" target="_blank" rel="nofollow">.*?<\/a>\s*<\/div>\s*<\/div>/is', '', $content);
    
    // In telegram-software-development.blade.php:
    $content = preg_replace('/<div class="elementor-widget-container">\s*<div class="elementor-button-wrapper">\s*<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="#" target="_blank" rel="nofollow">.*?<\/a>\s*<\/div>\s*<\/div>/is', '', $content);
    
    // In ai-sportsbook-risk-management.blade.php and instant-assist.blade.php
    $content = preg_replace('/<div class="elementor-widget-container">\s*<a href="#" class="xpro-elementor-button xpro-button-2d-animation hvr-grow xpro-align-icon-right" target="_blank" rel="noopener">.*?<\/a>\s*<\/div>/is', '', $content);
    
    file_put_contents($file, $content);
    echo "Processed $file\n";
}
?>
