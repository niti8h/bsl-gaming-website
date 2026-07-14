<?php
$blade = 'resources/views/about-us.blade.php';
$content = file_get_contents($blade);

$startStr = '<div class="elementor-element elementor-element-dbff6db';
$endStr = '<!--/.jltma-logo-slider-->';

$startPos = strpos($content, $startStr);
$endPos = strpos($content, $endStr, $startPos);

if ($startPos !== false && $endPos !== false) {
    $endPos += strlen($endStr);
    
    $before = substr($content, 0, $startPos);
    $after = substr($content, $endPos);
    
    $grid = '
    <!-- Custom Technologies Grid -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 40px; padding: 40px 0;">
        <i class="fab fa-aws" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fab fa-python" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fab fa-react" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fab fa-node-js" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fab fa-php" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fas fa-database" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fas fa-code" style="font-size: 80px; color: #D4AF37;"></i>
    </div>
    <!-- End Custom Technologies Grid -->
    ';
    
    file_put_contents($blade, $before . $grid . $after);
    echo "Successfully replaced slider with Grid!\n";
} else {
    echo "Could not find start or end markers!\n";
}
