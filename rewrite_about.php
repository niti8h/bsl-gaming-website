<?php
$file = 'resources/views/about-us.blade.php';
$content = file_get_contents($file);

$replacements = [
    'Welcome to BSL Gaming, a trusted software &amp; iGaming Development Company.' => 'Welcome to BSL Gaming, a premier iGaming and software engineering powerhouse.',
    'Today, we stand at the forefront of digital transformation, driven by a passion for excellence &amp; a relentless pursuit of innovation.' => 'We stand at the vanguard of digital transformation, driven by an unyielding passion for architectural excellence and a relentless pursuit of scalable innovation.',
    'With a keen understanding of market dynamics and player preferences, we build applications tailored' => 'Leveraging deep insights into market dynamics and player psychology, we engineer custom applications tailored',
    'to specific needs, ensuring they stay ahead of the curve in an increasingly competitive landscape. We stand as a beacon of reliability &amp; excellence in the iGaming &amp; Software sector.' => 'precisely to your operational needs. Our solutions drive engagement, maximize retention, and ensure scalable growth in an increasingly competitive global landscape.',
    'Crafting Winning Experiences with iGaming Software Development' => 'Architecting Winning Experiences through Elite iGaming Engineering',
    'Driven by a passion for software development, our mission is to redefine the boundaries of possibili' => 'Driven by an unyielding passion for software architecture, our mission is to continuously redefine technological boundaries.',
    'ties &amp; deliver unparalleled solutions that empower businesses. With our unwavering commitment to quality &amp; customer satisfaction, we envision a future where our transformative technologies inspire positive change.' => 'We envision a gaming ecosystem where innovation meets unparalleled performance, empowering operators to dominate their respective markets with bank-grade technology.',
    'Customised Sports Betting &amp; Casino Solutions' => 'Bespoke Sports Betting &amp; Casino Ecosystems',
    'Experienced team of developers' => 'Elite Team of Senior Engineers',
    'Multi-currency supporter' => 'Global Multi-Currency &amp; Crypto Support',
    'Automated Game Update' => 'Zero-Downtime Automated Updates',
    'Reliable End Product' => 'Enterprise-Grade Reliability',
    'Innovative solutions tailored to the industry' => 'Next-Gen Solutions Tailored for iGaming'
];

foreach ($replacements as $old => $new) {
    $pattern = preg_quote($old, '/');
    $pattern = preg_replace('/\\\s\+/', '\s+', $pattern);
    $content = preg_replace('/' . $pattern . '/iu', $new, $content);
}

file_put_contents($file, $content);
echo "Rewrote about-us.blade.php content\n";
