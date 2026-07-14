<?php
$file = 'resources/views/about-us.blade.php';
$content = file_get_contents($file);

// The grid starts here:
$gridStart = '<div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 40px; padding: 40px 0;">';
$gridPos = strpos($content, $gridStart);

if ($gridPos === false) {
    die("Grid not found\n");
}

// Find the end of the grid
$gridEnd = '</div>';
$endOfGrid = strpos($content, $gridEnd, $gridPos + strlen($gridStart)) + strlen($gridEnd);

// Right after the grid, the duplicate starts with:
// <div class="elementor-element elementor-element-489d9a6
$duplicateStart = strpos($content, '<div class="elementor-element elementor-element-489d9a6', $endOfGrid);

if ($duplicateStart === false) {
    die("Duplicate start not found\n");
}

// The duplicate contains the Swiper slider which ends right before:
// <section class="elementor-section elementor-top-section elementor-element elementor-element-2d577df
// Let's find the element right after the slider.
$afterSlider = strpos($content, '<div class="elementor-element elementor-element-dbff6db', $duplicateStart);
if ($afterSlider === false) {
    die("Slider not found in duplicate\n");
}

// Find the end of the slider container. The next major section is probably:
$nextSection = strpos($content, '<section class="elementor-section', $afterSlider);

if ($nextSection === false) {
    // If no section, look for footer or end of main wrapper
    $nextSection = strpos($content, '<!-- End Slider -->'); // Just guessing, let's find a reliable marker
    // Let's find: <div class="elementor-element elementor-element-d3132eb elementor-widget elementor-widget-spacer"
    $nextSection = strpos($content, '<div class="elementor-element elementor-element-2d577df', $afterSlider);
}

if ($nextSection === false) {
    // Let's just use string functions to find the exact end of the widget
    $nextSection = strpos($content, '				</div>
				</div>
					</div>
				</div>', $afterSlider);
    if ($nextSection !== false) {
        $nextSection += 26; // length of the closing tags roughly
    }
}

// If we can't cleanly parse it, let's just use a simpler approach:
// We want to KEEP everything from 0 to $endOfGrid.
// We want to KEEP everything AFTER the slider widget.
// The slider widget ends where the next widget begins. What is the next widget?
// Let's look at lines 500-600.
