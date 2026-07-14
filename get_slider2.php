<?php
$content = file_get_contents('resources/views/about-us.blade.php');
$start = strpos($content, '<img src="/img/aws-images/logom-react.png">');
if ($start !== false) {
    echo substr($content, $start, 1500);
}
