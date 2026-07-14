<?php
$content = file_get_contents('resources/views/home.blade.php');

$startMarker = '<div class="elementor-element elementor-element-97d4a7c elementor-widget__width-inherit our-blog-read';
$endMarker = '<div class="elementor-element elementor-element-383d70f elementor-align-center blog-button elementor-widget elementor-widget-button"';

$startIndex = strpos($content, $startMarker);
if ($startIndex !== false) {
    // Need to also remove the <style> block I added which is RIGHT BEFORE $startMarker
    // The style block starts with <style> and ends with </style>
    $styleMarker = '<style>';
    $styleIndex = strrpos(substr($content, 0, $startIndex), $styleMarker);
    if ($styleIndex !== false && $startIndex - $styleIndex < 500) {
        $startIndex = $styleIndex; // delete the style block too
    }
    
    $endIndex = strpos($content, $endMarker, $startIndex);
    
    if ($endIndex !== false) {
        $dynamicHtml = '
				<div class="elementor-element elementor-element-97d4a7c elementor-widget__width-inherit our-blog-read elementor-widget-tablet__width-initial elementor-widget-laptop__width-inherit elementor-widget elementor-widget-elementskit-blog-posts" data-id="97d4a7c" data-element_type="widget" data-e-type="widget" id="our-blog-post" data-widget_type="elementskit-blog-posts.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" >        <div id="post-items--97d4a7c" class="row post-items">
                    
                    @foreach($latestBlogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="elementskit-post-image-card">
                            <div class="elementskit-entry-header">
                                <a href="/blog/{{ $blog->slug }}" class="elementskit-entry-thumb">
                                    <img fifu-featured="1" decoding="async" src="{{ $blog->image ? asset(\'storage/\' . $blog->image) : asset(\'img/placeholder.png\') }}" alt="{{ $blog->title }}" title="{{ $blog->title }}">
                                </a>
                            </div>
                            <div class="elementskit-post-body ">
                                <h2 class="entry-title">
                                    <a href="/blog/{{ $blog->slug }}">
                                        {{ $blog->title }}
                                    </a>
                                </h2>
                                <div class="post-meta-list">
                                    <span class="meta-date">
                                        <i aria-hidden="true" class="far fa-calendar-alt"></i>
                                        <span class="meta-date-text">
                                            {{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format(\'M d, Y\') : $blog->created_at->format(\'M d, Y\') }}
                                        </span>
                                    </span>
                                </div>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 80) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    @if($latestBlogs->count() < 3)
                        @for($i = 0; $i < (3 - $latestBlogs->count()); $i++)
                        <div class="col-lg-4 col-md-6" style="visibility: hidden;">
                            <div class="elementskit-post-image-card">
                                <div class="elementskit-entry-header">
                                    <a href="#" class="elementskit-entry-thumb">
                                        <img fifu-featured="1" decoding="async" src="{{ asset(\'img/placeholder.png\') }}" alt="Placeholder" title="Placeholder">
                                    </a>
                                </div>
                                <div class="elementskit-post-body ">
                                    <h2 class="entry-title"><a href="#">Placeholder</a></h2>
                                </div>
                            </div>
                        </div>
                        @endfor
                    @endif
                    
                </div>
       </div>				</div>
				</div>
        ';
        
        $before = substr($content, 0, $startIndex);
        $after = substr($content, $endIndex);
        
        file_put_contents('resources/views/home.blade.php', $before . "\n" . trim($dynamicHtml) . "\n" . $after);
        echo "Successfully restored HTML carousel.\n";
    }
}
