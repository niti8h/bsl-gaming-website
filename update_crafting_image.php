<?php
$blade = 'resources/views/about-us.blade.php';
$content = file_get_contents($blade);
$content = str_replace('Crafting+Winning+Experiences.jpeg', 'Crafting-Winning-Experiences.jpg', $content);
file_put_contents($blade, $content);
echo "Updated image in about-us.blade.php\n";
