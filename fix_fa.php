<?php
$blade = 'resources/views/layouts/app.blade.php';
$content = file_get_contents($blade);
if (strpos($content, 'cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css') === false) {
    $cdn = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
    $content = str_replace('</head>', $cdn . "\n</head>", $content);
    file_put_contents($blade, $content);
    echo "Added FontAwesome CDN\n";
} else {
    echo "CDN already exists\n";
}
