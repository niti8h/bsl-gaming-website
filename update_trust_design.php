<?php
$content = file_get_contents('resources/views/home.blade.php');

$startMarker = '<!-- Trust Numbers Section -->';
$endMarker = '<!-- End Trust Numbers Section -->';

$startIndex = strpos($content, $startMarker);
$endIndex = strpos($content, $endMarker);

if ($startIndex !== false && $endIndex !== false) {
    $endIndex += strlen($endMarker);
    
    $premiumHtml = '
<!-- Trust Numbers Section -->
<div class="trust-numbers-premium" style="padding: 100px 20px; background: linear-gradient(135deg, #050505 0%, #111 100%); position: relative; margin: 40px 0;">
    <div style="position: absolute; top: -50%; left: -20%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(212,175,55,0.1) 0%, rgba(0,0,0,0) 70%); border-radius: 50%; filter: blur(40px);"></div>
    <div style="position: absolute; bottom: -50%; right: -20%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(212,175,55,0.05) 0%, rgba(0,0,0,0) 70%); border-radius: 50%; filter: blur(40px);"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 40px; position: relative; z-index: 10;">
        
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(212,175,55,0.15); border-radius: 20px; padding: 50px 20px; text-align: center; backdrop-filter: blur(15px); box-shadow: 0 4px 30px rgba(0,0,0,0.1); transition: all 0.4s ease;" onmouseover="this.style.transform=\'translateY(-12px)\'; this.style.borderColor=\'rgba(212,175,55,0.5)\'; this.style.boxShadow=\'0 20px 40px rgba(212,175,55,0.1)\';" onmouseout="this.style.transform=\'translateY(0)\'; this.style.borderColor=\'rgba(212,175,55,0.15)\'; this.style.boxShadow=\'0 4px 30px rgba(0,0,0,0.1)\';">
            <h2 style="color: #D4AF37; font-size: 64px; font-weight: 800; margin: 0 0 15px 0; font-family: \'Outfit\', \'Inter\', sans-serif; line-height: 1; text-shadow: 0 2px 10px rgba(212,175,55,0.3);">{{ $settings[\'trust_number_1\'] ?? \'10+\' }}</h2>
            <p style="color: #cccccc; font-size: 15px; font-weight: 500; text-transform: uppercase; letter-spacing: 3px; margin: 0; font-family: \'Inter\', sans-serif;">{{ $settings[\'trust_label_1\'] ?? \'Years Experience\' }}</p>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(212,175,55,0.15); border-radius: 20px; padding: 50px 20px; text-align: center; backdrop-filter: blur(15px); box-shadow: 0 4px 30px rgba(0,0,0,0.1); transition: all 0.4s ease;" onmouseover="this.style.transform=\'translateY(-12px)\'; this.style.borderColor=\'rgba(212,175,55,0.5)\'; this.style.boxShadow=\'0 20px 40px rgba(212,175,55,0.1)\';" onmouseout="this.style.transform=\'translateY(0)\'; this.style.borderColor=\'rgba(212,175,55,0.15)\'; this.style.boxShadow=\'0 4px 30px rgba(0,0,0,0.1)\';">
            <h2 style="color: #D4AF37; font-size: 64px; font-weight: 800; margin: 0 0 15px 0; font-family: \'Outfit\', \'Inter\', sans-serif; line-height: 1; text-shadow: 0 2px 10px rgba(212,175,55,0.3);">{{ $settings[\'trust_number_2\'] ?? \'150+\' }}</h2>
            <p style="color: #cccccc; font-size: 15px; font-weight: 500; text-transform: uppercase; letter-spacing: 3px; margin: 0; font-family: \'Inter\', sans-serif;">{{ $settings[\'trust_label_2\'] ?? \'Projects Completed\' }}</p>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(212,175,55,0.15); border-radius: 20px; padding: 50px 20px; text-align: center; backdrop-filter: blur(15px); box-shadow: 0 4px 30px rgba(0,0,0,0.1); transition: all 0.4s ease;" onmouseover="this.style.transform=\'translateY(-12px)\'; this.style.borderColor=\'rgba(212,175,55,0.5)\'; this.style.boxShadow=\'0 20px 40px rgba(212,175,55,0.1)\';" onmouseout="this.style.transform=\'translateY(0)\'; this.style.borderColor=\'rgba(212,175,55,0.15)\'; this.style.boxShadow=\'0 4px 30px rgba(0,0,0,0.1)\';">
            <h2 style="color: #D4AF37; font-size: 64px; font-weight: 800; margin: 0 0 15px 0; font-family: \'Outfit\', \'Inter\', sans-serif; line-height: 1; text-shadow: 0 2px 10px rgba(212,175,55,0.3);">{{ $settings[\'trust_number_3\'] ?? \'50+\' }}</h2>
            <p style="color: #cccccc; font-size: 15px; font-weight: 500; text-transform: uppercase; letter-spacing: 3px; margin: 0; font-family: \'Inter\', sans-serif;">{{ $settings[\'trust_label_3\'] ?? \'Industry Experts\' }}</p>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(212,175,55,0.15); border-radius: 20px; padding: 50px 20px; text-align: center; backdrop-filter: blur(15px); box-shadow: 0 4px 30px rgba(0,0,0,0.1); transition: all 0.4s ease;" onmouseover="this.style.transform=\'translateY(-12px)\'; this.style.borderColor=\'rgba(212,175,55,0.5)\'; this.style.boxShadow=\'0 20px 40px rgba(212,175,55,0.1)\';" onmouseout="this.style.transform=\'translateY(0)\'; this.style.borderColor=\'rgba(212,175,55,0.15)\'; this.style.boxShadow=\'0 4px 30px rgba(0,0,0,0.1)\';">
            <h2 style="color: #D4AF37; font-size: 64px; font-weight: 800; margin: 0 0 15px 0; font-family: \'Outfit\', \'Inter\', sans-serif; line-height: 1; text-shadow: 0 2px 10px rgba(212,175,55,0.3);">{{ $settings[\'trust_number_4\'] ?? \'100%\' }}</h2>
            <p style="color: #cccccc; font-size: 15px; font-weight: 500; text-transform: uppercase; letter-spacing: 3px; margin: 0; font-family: \'Inter\', sans-serif;">{{ $settings[\'trust_label_4\'] ?? \'Client Satisfaction\' }}</p>
        </div>

    </div>
</div>
<!-- End Trust Numbers Section -->
';

    $before = substr($content, 0, $startIndex);
    $after = substr($content, $endIndex);
    
    file_put_contents('resources/views/home.blade.php', $before . $premiumHtml . $after);
    echo "Updated successfully.\n";
} else {
    echo "Markers not found.\n";
}
