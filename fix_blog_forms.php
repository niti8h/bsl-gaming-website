<?php
$files = glob('resources/views/blog/*.php');
$count = 0;

$form10740 = '/<div class="wpforms-container wpforms-container-full submit-btn wpforms-render-modern" id="wpforms-10740">.*?<!-- \.wpforms-container -->/s';
$replacement1 = '<style>
.contact-form-custom { background: rgba(0,0,0,0.5); padding: 30px; border-radius: 10px; }
.contact-form-custom input, .contact-form-custom textarea { width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #555; background: #222; color: #fff; margin-bottom: 15px; }
.contact-form-custom button { background: #D4AF37; color: #000; padding: 12px 30px; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; font-size: 16px; transition: background 0.3s; }
.contact-form-custom button:hover { background: #b8972e; }
.contact-form-custom label { color:#fff; display:block; margin-bottom: 5px; }
</style>
<div class="contact-form-custom">
	<form method="POST" action="{{ route(\'contact.submit\') }}">
		@csrf
		<h3 style="color:#fff; margin-bottom: 10px; font-size: 18px;">Let\'s talk business!</h3>
		<p style="color:#fff; margin-bottom: 20px; font-size: 14px;">Let’s create what the world plays. Share your requirements and our experts will reach you shortly!</p>
		<label>Full Name *</label>
		<input type="text" name="name" required placeholder="Your Name">
		<label>Email *</label>
		<input type="email" name="email" required placeholder="Your Email">
		<label>Phone Number *</label>
		<input type="text" name="phone_number" required placeholder="Your Phone Number">
		<label>Message *</label>
		<textarea name="message" required placeholder="Message" style="min-height: 120px;"></textarea>
		<button type="submit">Send Message</button>
	</form>
</div>';

foreach ($files as $file) {
    $content = file_get_contents($file);
    if (preg_match($form10740, $content)) {
        $content = preg_replace($form10740, $replacement1, $content);
        file_put_contents($file, $content);
        $count++;
    }
}
echo "Updated $count files";
