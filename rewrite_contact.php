<?php
$file = 'resources/views/contact.blade.php';
$content = file_get_contents($file);

$replacements = [
    'Discuss your project requirements with us by filling out the form below and our experts will get in touch.' => 'Outline your operational requirements using the form below. Our elite technical consultants will analyze your needs and contact you promptly.',
    'SCHEDULE A CALL!' => 'INITIATE A CONSULTATION',
    'Searching for an iGaming Software Development Company? We would love to connect with you !!' => 'Ready to architect the next generation of iGaming platforms? We are prepared to accelerate your vision.',
    'Need IT Consultation or Gaming Solutions? Share your requirements and our experts will reach you shortly.' => 'Require enterprise-grade IT infrastructure or custom gaming ecosystems? Submit your parameters and our specialists will engage shortly.'
];

foreach ($replacements as $old => $new) {
    $pattern = preg_quote($old, '/');
    $pattern = preg_replace('/\\\s\+/', '\s+', $pattern);
    $content = preg_replace('/' . $pattern . '/iu', $new, $content);
}

file_put_contents($file, $content);
echo "Rewrote contact.blade.php content\n";
