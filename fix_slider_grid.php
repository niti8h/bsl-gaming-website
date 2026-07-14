<?php
$file = 'resources/views/about-us.blade.php';
$content = file_get_contents($file);

$startMarker = '<span>TECHNOLOGIES</span> WE RELY ON</h2>				</div>
				</div>';

$endMarker = '<!-- End Technologies -->'; // Doesn't exist, we need to find the end of the widget.
// Let's just find the next elementor-element e-flex container
$endMarkerStr = '<div class="elementor-element elementor-element-489d9a6';

$startPos = strpos($content, $startMarker);
$endPos = strpos($content, $endMarkerStr);

if ($startPos !== false && $endPos !== false) {
    $before = substr($content, 0, $startPos + strlen($startMarker));
    $after = substr($content, $endPos);

    $grid = '
    <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 40px; padding: 40px 0;">
        <i class="fab fa-aws" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fab fa-python" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fab fa-react" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fab fa-node-js" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fab fa-php" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fas fa-database" style="font-size: 80px; color: #D4AF37;"></i>
        <i class="fas fa-code" style="font-size: 80px; color: #D4AF37;"></i>
    </div>
    ';

    file_put_contents($file, $before . $grid . $after);
    echo "Replaced Swiper slider with raw CSS flexbox grid.\n";
} else {
    echo "Could not find markers.\n";
}
