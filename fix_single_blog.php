<?php
$file = 'public/post_content.html';
$content = file_get_contents($file);

// Replace title
$content = preg_replace(
    '/<span class="xpro-page-title-text">\s*Top 10 iGaming Software Development Features Tunisian Operators Need\s*<\/span>/is',
    '<span class="xpro-page-title-text">{{ $post->title }}</span>',
    $content
);

// Replace date
$content = str_replace(
    'July 2, 2026',
    '{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format(\'F j, Y\') : $post->created_at->format(\'F j, Y\') }}',
    $content
);

// Replace image
$content = preg_replace(
    '/<img[^>]*src="[^"]*ChatGPT-Image[^"]*"[^>]*>/i',
    '@if($post->image)<img src="{{ asset(\'storage/\' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">@endif',
    $content
);

// Replace content block
$startStr = '<div class="xpro-elementor-content">';
$startPos = strpos($content, $startStr);

if ($startPos !== false) {
    // We want to replace everything from $startPos + strlen($startStr) until the closing </div>
    // Since there are many divs inside, we find the sequence of closing tags at the end of the widget
    $endSequence = "</div>\n\n\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t</div>";
    $endPos = strpos($content, $endSequence, $startPos);
    
    if ($endPos !== false) {
        $before = substr($content, 0, $startPos + strlen($startStr));
        $after = substr($content, $endPos);
        $content = $before . "\n{!! \$post->content !!}\n" . $after;
    }
}

$finalContent = "
@extends('layouts.app')
@section('title', \$post->title)
@section('meta_description', \$post->meta_description)

@push('styles')
<link rel='stylesheet' href='/wp-content/uploads/elementor/css/post-7836e8a2.css' media='all' />
<style>
.xpro-elementor-content h2, 
.xpro-elementor-content h3, 
.xpro-elementor-content h4 {
    color: var(--royal-gold, #D4AF37);
    margin-top: 30px;
    margin-bottom: 15px;
}
.xpro-elementor-content p {
    margin-bottom: 20px;
    line-height: 1.8;
}
.xpro-elementor-content a {
    color: var(--royal-gold, #D4AF37);
    text-decoration: underline;
}
.xpro-elementor-content ul, 
.xpro-elementor-content ol {
    margin-bottom: 20px;
    padding-left: 20px;
}
.xpro-elementor-content li {
    margin-bottom: 10px;
}
</style>
@endpush

@section('content')
" . $content . "
@endsection
";

file_put_contents('resources/views/single-blog-dynamic.blade.php', $finalContent);
echo "Done replacing!\n";
