<?php
$content = file_get_contents('resources/views/about-us.blade.php');
$pos = stripos($content, 'TECHNOLOGIES');
if ($pos !== false) {
    echo substr($content, max(0, $pos - 500), 1500);
} else {
    echo "Not found";
}
