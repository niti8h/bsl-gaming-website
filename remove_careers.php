<?php
$file = 'resources/views/layouts/app.blade.php';
$content = file_get_contents($file);

// Remove standard menu items: <li ...> ...Careers... </li>
$content = preg_replace('/<li[^>]*>\s*<a[^>]*href="[^"]*careers[^"]*"[^>]*>Careers<\/a>\s*<\/li>/i', '', $content);

// Remove footer repeater items:
$content = preg_replace('/<li class="xpro-infolist-item[^>]*>\s*<a href="\/careers"[^>]*>[\s\S]*?<p class="xpro-infolist-desc">Careers<\/p>[\s\S]*?<\/a>\s*<\/li>/i', '', $content);

file_put_contents($file, $content);
echo "Careers menu removed from app.blade.php\n";
