<?php
$directories = ['resources/views/', 'resources/views/blog/'];
$count = 0;

foreach ($directories as $dir) {
    $files = glob($dir . '*.{php}', GLOB_BRACE);
    foreach ($files as $file) {
        $content = file_get_contents($file);
        
        if (strpos($content, 'name="telegram_id"') !== false) {
            continue; // Already added
        }
        
        if (strpos($content, 'name="phone_number"') !== false) {
            // Use regex to find the phone_number input and add telegram_id right after it
            $pattern = '/(<input[^>]*name="phone_number"[^>]*>)/i';
            $replacement = '$1' . "\n\t\t<input type=\"text\" name=\"telegram_id\" placeholder=\"Telegram ID (Optional)\">";
            
            // Special handling for contact.blade.php inline styles
            if (strpos($file, 'contact.blade.php') !== false) {
                $replacement = '$1' . "\n\t\t\t\t\t\t<br><br>\n\t\t\t\t\t\t<input type=\"text\" name=\"telegram_id\" style=\"width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #555; background: #222; color: #fff;\" placeholder=\"Telegram ID (Optional)\">";
            }
            
            $new_content = preg_replace($pattern, $replacement, $content);
            if ($new_content !== null && $new_content !== $content) {
                file_put_contents($file, $new_content);
                $count++;
            }
        }
    }
}
echo "Added telegram_id input to $count files.\n";
?>
