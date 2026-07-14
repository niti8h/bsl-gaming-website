<?php

function replace_testimonials($file) {
    $content = file_get_contents($file);
    
    // Find the heading
    $h3_str = '<h3 class="ekit-heading--title elementskit-section-title ">Testimonials</h3>';
    $pos_h3 = strpos($content, $h3_str);
    if ($pos_h3 === false) {
        $h3_str = '<h3 class="ekit-heading--title elementskit-section-title">Testimonials</h3>';
        $pos_h3 = strpos($content, $h3_str);
        if ($pos_h3 === false) {
            return false;
        }
    }
    
    // Search backwards for the container start
    $start_pos = -1;
    preg_match_all('/<div class="elementor-element elementor-element-[a-z0-9]+ e-con-full e-flex e-con e-parent"/', substr($content, 0, $pos_h3), $matches, PREG_OFFSET_CAPTURE);
    if (!empty($matches[0])) {
        $last_match = end($matches[0]);
        $start_pos = $last_match[1];
    }
    
    if ($start_pos === -1) {
        echo "Could not find start container in $file\n";
        return false;
    }
    
    // Find the exact div start of the testimonial-custom-sec
    $div_start_regex = '/<div class="elementor-element elementor-element-[a-z0-9]+ testimonial-custom-sec/';
    if (!preg_match($div_start_regex, substr($content, $start_pos), $match, PREG_OFFSET_CAPTURE)) {
        echo "Could not find testimonial container div in $file\n";
        return false;
    }
    
    $testimonial_div_start = $start_pos + $match[0][1];
    
    $depth = 0;
    $end_pos = -1;
    $len = strlen($content);
    
    for ($i = $testimonial_div_start; $i < $len; $i++) {
        if (substr($content, $i, 4) === '<div') {
            $depth++;
        } elseif (substr($content, $i, 5) === '</div') {
            $depth--;
            if ($depth === 0) {
                $close_bracket = strpos($content, '>', $i);
                if ($close_bracket !== false) {
                    $end_pos = $close_bracket + 1;
                }
                break;
            }
        }
    }
    
    if ($end_pos === -1) {
        echo "Could not find matching closing div in $file\n";
        return false;
    }
    
    if (substr($file, -10) === '.blade.php') {
        $replacement = "@include('partials.testimonials')";
    } else {
        $replacement = "<?php echo view('partials.testimonials')->render(); ?>";
    }
    
    $new_content = substr($content, 0, $start_pos) . $replacement . substr($content, $end_pos);
    file_put_contents($file, $new_content);
    echo "Replaced in $file\n";
    return true;
}

$directories = ['resources/views/', 'resources/views/blog/'];
$count = 0;

foreach ($directories as $dir) {
    $files = glob($dir . '*.{php}', GLOB_BRACE);
    foreach ($files as $file) {
        if (strpos($file, 'home.blade.php') !== false) continue;
        if (strpos($file, 'app.blade.php') !== false) continue;
        if (strpos($file, 'single-blog') !== false) continue;
        if (strpos($file, 'partials') !== false) continue;
        
        if (replace_testimonials($file)) {
            $count++;
        }
    }
}

echo "Successfully updated $count files.\n";

?>
