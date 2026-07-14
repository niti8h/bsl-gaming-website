<?php
// Let's create a red square base64 image
$base64 = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z8BQDwAEhQGAhKmMIQAAAABJRU5ErkJggg==';

// And replace the first slider icon in about-us.blade.php with it
$blade = 'resources/views/about-us.blade.php';
$content = file_get_contents($blade);
$content = str_replace('<i class="fab fa-aws" style="font-size: 80px; color: #D4AF37; margin: 20px;"></i>', '<img src="'.$base64.'" style="width: 100px; height: 100px; display: block; background: red;">', $content);
file_put_contents($blade, $content);
echo "Injected red square base64\n";
