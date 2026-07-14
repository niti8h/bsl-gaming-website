<?php
$content = file_get_contents('resources/views/about-us.blade.php');
$pos = strpos($content, '<span>TECHNOLOGIES</span> WE RELY ON');
if ($pos !== false) {
    echo substr($content, $pos, 4000);
}
