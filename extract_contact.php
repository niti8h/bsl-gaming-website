<?php
$html = file_get_contents('resources/views/contact.blade.php');
$dom = new DOMDocument();
@$dom->loadHTML('<?xml encoding="utf-8" ?>' . $html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
$xpath = new DOMXPath($dom);

$elements = $xpath->query('//h1 | //h2 | //h3 | //p');
$texts = [];
foreach ($elements as $el) {
    $text = trim($el->textContent);
    if (strlen($text) > 10 && !preg_match('/^[0-9\+\%]+$/', $text)) {
        $texts[] = $text;
    }
}
$texts = array_unique($texts);
foreach ($texts as $i => $t) {
    echo "[$i] " . substr(preg_replace('/\s+/', ' ', $t), 0, 100) . "\n";
}
