<?php
$file = 'resources/views/about-us.blade.php';
$content = file_get_contents($file);
$css = '<style>
.jltma-logo-slider-item { opacity: 1 !important; visibility: visible !important; display: block !important; }
.jltma-logo-carousel-slider .swiper-wrapper { display: flex !important; flex-wrap: wrap !important; gap: 20px; justify-content: center; }
.jltma-logo-slider-figure img { display: inline-block !important; width: 150px !important; height: auto !important; margin: 10px; }
.premium-adv-carousel__item-img { opacity: 1 !important; visibility: visible !important; }
</style>';
if (strpos($content, '.jltma-logo-slider-item') === false) {
    $content = str_replace('</head>', $css . "\n</head>", $content);
    if (strpos($content, '</head>') === false) { // If no head, just prepend
        $content = $css . "\n" . $content;
    }
    file_put_contents($file, $content);
    echo "Added CSS to fix slider visibility\n";
} else {
    echo "CSS already added\n";
}
