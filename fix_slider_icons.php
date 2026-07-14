<?php
$blade = 'resources/views/about-us.blade.php';
$content = file_get_contents($blade);

$icons = [
    '<i class="fab fa-aws" style="font-size: 80px; color: #D4AF37; margin: 20px;"></i>',
    '<i class="fab fa-python" style="font-size: 80px; color: #D4AF37; margin: 20px;"></i>',
    '<i class="fab fa-react" style="font-size: 80px; color: #D4AF37; margin: 20px;"></i>',
    '<i class="fab fa-node-js" style="font-size: 80px; color: #D4AF37; margin: 20px;"></i>',
    '<i class="fab fa-php" style="font-size: 80px; color: #D4AF37; margin: 20px;"></i>',
    '<i class="fas fa-database" style="font-size: 80px; color: #D4AF37; margin: 20px;"></i>',
    '<i class="fas fa-code" style="font-size: 80px; color: #D4AF37; margin: 20px;"></i>'
];

$content = str_replace('<img src="/img/aws-images/logo-rails-1.png">', $icons[0], $content);
$content = str_replace('<img src="/img/aws-images/logo-aws.png">', $icons[1], $content);
$content = str_replace('<img src="/img/aws-images/logo-django-1.png">', $icons[2], $content);
$content = str_replace('<img src="/img/aws-images/logo-langchain.png">', $icons[3], $content);
$content = str_replace('<img src="/img/aws-images/logo-mongodb.png">', $icons[4], $content);
$content = str_replace('<img src="/img/aws-images/logom-react.png">', $icons[5], $content);
$content = str_replace('<img src="/img/aws-images/logo-andmore-1.png">', $icons[6], $content);

file_put_contents($blade, $content);
echo "Replaced logos with FontAwesome icons\n";
