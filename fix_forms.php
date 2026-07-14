<?php
$file = 'resources/views/layouts/app.blade.php';
$content = file_get_contents($file);

// Form 1: 10740
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

// Form 2: 12352
$form12352 = '/<div class="wpforms-container wpforms-container-full wpforms-render-modern" id="wpforms-12352">.*?<!-- \.wpforms-container -->/s';
$replacement2 = '<div class="contact-form-custom" style="background: transparent; padding: 10px;">
	<form method="POST" action="{{ route(\'contact.submit\') }}">
		@csrf
		<label>Name *</label>
		<input type="text" name="name" required placeholder="Enter Name">
		<label>Email Id *</label>
		<input type="email" name="email" required placeholder="Enter Email Id">
		<label>Phone Number *</label>
		<input type="text" name="phone_number" required placeholder="Phone Number">
		<label>How can we assist you??? *</label>
		<textarea name="message" required placeholder="Enter your Message" style="min-height: 100px;"></textarea>
		<button type="submit" class="pop-up-btn" style="width: 100%; border-radius: 5px; padding: 12px; background: #D4AF37; font-weight: bold; color: black; border: none;">Submit</button>
	</form>
</div>';

$content = preg_replace($form10740, $replacement1, $content);
$content = preg_replace($form12352, $replacement2, $content);

file_put_contents($file, $content);
echo "Done";
