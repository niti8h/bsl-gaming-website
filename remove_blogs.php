<?php

function remove_blog_section($content) {
    // Find where the blog section starts. 
    // It typically contains 'elementskit-blog-posts' or 'our-blog-read'.
    // We want to find the nearest top-level elementor container (e.g. e-parent or section)
    
    // Instead of full DOM parsing which can break on malformed HTML, we can do string search.
    $offset = 0;
    while (($pos = strpos($content, 'elementskit-blog-posts', $offset)) !== false) {
        // Find the start of the nearest parent section/container
        // Let's search backwards for '<div class="elementor-element' that also has 'e-parent' or '<section'
        $searchStr = substr($content, 0, $pos);
        $parentStart = -1;
        
        // Find the last '<div ' or '<section ' before $pos that is a main container
        $matches = [];
        if (preg_match_all('/<(div|section)[^>]*class="[^"]*(e-parent|elementor-section-wrap|elementor-top-section)[^"]*"[^>]*>/i', $searchStr, $matches, PREG_OFFSET_CAPTURE)) {
            $lastMatch = end($matches[0]);
            $parentStart = $lastMatch[1];
        } else {
            // fallback if no e-parent is found, just find the nearest one with 'elementor-element' that contains 'read-blog'
            if (preg_match_all('/<div[^>]*class="[^"]*elementor-element[^"]*"[^>]*id="[^"]*blog[^"]*"[^>]*>/i', $searchStr, $matches, PREG_OFFSET_CAPTURE)) {
                $lastMatch = end($matches[0]);
                $parentStart = $lastMatch[1];
            }
        }
        
        if ($parentStart !== -1 && $parentStart !== false) {
            // Now find the matching closing tag for this parentStart
            $tagName = (substr($content, $parentStart, 7) === '<section') ? 'section' : 'div';
            
            $openTags = 0;
            $currentIndex = $parentStart;
            $len = strlen($content);
            $endIndex = -1;
            
            while ($currentIndex < $len) {
                $nextOpen = strpos($content, "<$tagName", $currentIndex);
                $nextClose = strpos($content, "</$tagName>", $currentIndex);
                
                if ($nextOpen !== false && $nextOpen < $nextClose) {
                    $openTags++;
                    $currentIndex = $nextOpen + 1;
                } elseif ($nextClose !== false) {
                    $openTags--;
                    $currentIndex = $nextClose + 1;
                    if ($openTags === 0) {
                        $endIndex = $nextClose + strlen("</$tagName>");
                        break;
                    }
                } else {
                    break; // Malformed HTML or something
                }
            }
            
            if ($endIndex !== -1) {
                // Remove this block
                $content = substr($content, 0, $parentStart) . substr($content, $endIndex);
                // We restart search from 0 because string length changed
                $offset = 0;
                continue;
            }
        }
        
        $offset = $pos + 1;
    }
    
    return $content;
}

$files = glob("resources/views/**/*.php");
$files = array_merge($files, glob("resources/views/*.php"));
$files = array_merge($files, glob("resources/views/**/*.blade.php"));
$files = array_merge($files, glob("resources/views/*.blade.php"));
$files = array_unique($files);

$count = 0;
foreach ($files as $file) {
    if (strpos($file, 'home.blade.php') !== false || strpos($file, '/blogs.blade.php') !== false || strpos($file, '/blogs/') !== false) {
        continue;
    }
    
    $oldContent = file_get_contents($file);
    if (strpos($oldContent, 'elementskit-blog-posts') !== false) {
        $newContent = remove_blog_section($oldContent);
        if ($newContent !== $oldContent) {
            file_put_contents($file, $newContent);
            echo "Updated: $file\n";
            $count++;
        }
    }
}
echo "Total updated: $count\n";
?>
