<?php
$content = file_get_contents('resources/views/about-us.blade.php');
$start = strpos($content, 'TECHNOLOGIES</span> WE RELY ON');
$end = strpos($content, '<!-- End Technologies -->', $start); // If exists
if ($end === false) $end = $start + 4000;
echo substr($content, $start, $end - $start);
