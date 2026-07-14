<?php
$files1 = glob("resources/views/**/*.php");
$files2 = glob("resources/views/*.php");
$files = array_merge($files1, $files2);
$count = 0;
foreach($files as $file) {
    $content = file_get_contents($file);
    preg_match_all("/<a[^>]*href=[\"']#?[\"'][^>]*>/i", $content, $matches);
    foreach($matches[0] as $match) {
        if (stripos($match, "btn") !== false || stripos($match, "button") !== false) {
            if (stripos($match, "dropdown") === false && stripos($match, "nav") === false && stripos($match, "collapse") === false) {
                echo "$file: $match\n";
                $count++;
                if($count > 20) break 2;
            }
        }
    }
}
echo "Total: $count\n";
?>
