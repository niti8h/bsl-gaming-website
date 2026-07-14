<?php
$content = file_get_contents('resources/views/home.blade.php');

$targetMarker = '<div class="elementor-element elementor-element-a0f1632 e-flex e-con-boxed e-con e-parent" data-id="a0f1632" data-element_type="container" data-e-type="container" id="read-blog-ours"';

$trustHtml = '
<!-- Trust Numbers Section -->
<div class="elementor-element e-flex e-con-boxed e-con e-parent" style="background-color: #0d0d0d; padding: 60px 0; border-top: 2px solid var(--e-global-color-primary, #D4AF37); border-bottom: 2px solid var(--e-global-color-primary, #D4AF37); margin: 40px 0;">
    <div class="e-con-inner" style="display: flex; justify-content: space-around; flex-wrap: wrap; text-align: center; width: 100%; max-width: 1200px; margin: 0 auto; gap: 30px;">
        
        <div style="flex: 1; min-width: 200px;">
            <h2 style="color: var(--e-global-color-primary, #D4AF37); font-size: 48px; font-weight: 700; margin-bottom: 10px;">{{ $settings[\'trust_number_1\'] ?? \'10+\' }}</h2>
            <p style="color: #fff; font-size: 18px; text-transform: uppercase; letter-spacing: 1px;">{{ $settings[\'trust_label_1\'] ?? \'Years Experience\' }}</p>
        </div>

        <div style="flex: 1; min-width: 200px;">
            <h2 style="color: var(--e-global-color-primary, #D4AF37); font-size: 48px; font-weight: 700; margin-bottom: 10px;">{{ $settings[\'trust_number_2\'] ?? \'150+\' }}</h2>
            <p style="color: #fff; font-size: 18px; text-transform: uppercase; letter-spacing: 1px;">{{ $settings[\'trust_label_2\'] ?? \'Projects Completed\' }}</p>
        </div>

        <div style="flex: 1; min-width: 200px;">
            <h2 style="color: var(--e-global-color-primary, #D4AF37); font-size: 48px; font-weight: 700; margin-bottom: 10px;">{{ $settings[\'trust_number_3\'] ?? \'50+\' }}</h2>
            <p style="color: #fff; font-size: 18px; text-transform: uppercase; letter-spacing: 1px;">{{ $settings[\'trust_label_3\'] ?? \'Industry Experts\' }}</p>
        </div>

        <div style="flex: 1; min-width: 200px;">
            <h2 style="color: var(--e-global-color-primary, #D4AF37); font-size: 48px; font-weight: 700; margin-bottom: 10px;">{{ $settings[\'trust_number_4\'] ?? \'100%\' }}</h2>
            <p style="color: #fff; font-size: 18px; text-transform: uppercase; letter-spacing: 1px;">{{ $settings[\'trust_label_4\'] ?? \'Client Satisfaction\' }}</p>
        </div>

    </div>
</div>
<!-- End Trust Numbers Section -->
';

$startIndex = strpos($content, $targetMarker);
if ($startIndex !== false) {
    $before = substr($content, 0, $startIndex);
    $after = substr($content, $startIndex);
    
    file_put_contents('resources/views/home.blade.php', $before . "\n" . trim($trustHtml) . "\n" . $after);
    echo "Successfully injected trust numbers.\n";
} else {
    echo "Marker not found!\n";
}
