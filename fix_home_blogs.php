<?php
$content = file_get_contents('resources/views/home.blade.php');

$startMarker = '<div id="post-items--97d4a7c" class="row post-items">';
$endMarker = '<div class="elementor-element elementor-element-383d70f elementor-align-center blog-button elementor-widget elementor-widget-button"';

$startIndex = strpos($content, $startMarker);
if ($startIndex !== false) {
    $endIndex = strpos($content, $endMarker, $startIndex);
    if ($endIndex !== false) {
        $dynamicHtml = '
            @foreach($latestBlogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="elementskit-post-image-card">
                    <div class="elementskit-entry-header">
                        <a href="/blog/{{ $blog->slug }}" class="elementskit-entry-thumb">
                            @if($blog->image)
                            <img src="{{ asset(\'storage/\' . $blog->image) }}" style="width:100%; height:250px; object-fit:cover;" />
                            @else
                            <div style="width:100%; height:250px; background:#1e1e1e; display:flex; align-items:center; justify-content:center; color:#fff;">
                                <span>No Image</span>
                            </div>
                            @endif
                        </a>
                    </div>
                    <div class="elementskit-post-body ">
                        <h2 class="entry-title">
                            <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
                        </h2>
                        <div class="post-meta-list">
                            <span class="meta-date">
                                <i aria-hidden="true" class="far fa-calendar-alt"></i>
                                <span class="meta-date-text">{{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format(\'M d, Y\') : $blog->created_at->format(\'M d, Y\') }}</span>
                            </span>
                        </div>
                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        </div>
        </div>
        ';
        
        $before = substr($content, 0, $startIndex + strlen($startMarker));
        $after = substr($content, $endIndex);
        
        file_put_contents('resources/views/home.blade.php', $before . "\n" . $dynamicHtml . "\n" . $after);
        echo "Fixed HTML structure.\n";
    }
}
