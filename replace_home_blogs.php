<?php
$content = file_get_contents('resources/views/home.blade.php');

$startMarker = '<div class="jltma-blog-wrapper jltma-blog-grid jltma-row">';
$endMarker = '</div>

							
					</div>';

$startIndex = strpos($content, $startMarker);
// Since there could be multiple such markers, we need to find the one after line 1500 (the second blogs section).
// Actually let's just find the first occurrence after the "Read our blogs" heading at elementor-element-8bec697
$searchContext = 'elementor-element-8bec697';
$contextIndex = strpos($content, $searchContext);

if ($contextIndex !== false) {
    $startIndex = strpos($content, $startMarker, $contextIndex);
    if ($startIndex !== false) {
        $endIndex = strpos($content, $endMarker, $startIndex);
        
        if ($endIndex !== false) {
            $before = substr($content, 0, $startIndex + strlen($startMarker));
            $after = substr($content, $endIndex);
            
            $dynamicHtml = '
            @foreach($latestBlogs as $blog)
            <div class="jltma-post-outer-container jltma-col-4">
                <div class="jltma-blog-post jltma-default-post classic">
                    <div>
                        <div class="elementor-animation-grow">
                            <div class="jltma-post-thumbnail jltma-img-shine jltma-img-shape-none">
                                <a href="/blog/{{ $blog->slug }}" target="_self">
                                    @if($blog->image)
                                    <img src="{{ asset(\'storage/\' . $blog->image) }}" style="width:100%; height:200px; object-fit:cover;" />
                                    @else
                                    <div style="width:100%; height:200px; background:#1e1e1e; display:flex; align-items:center; justify-content:center; color:#fff;">
                                        <span>No Image</span>
                                    </div>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="jltma-blog-effect-container jltma-blog-shine-effect">
                        <a class="jltma-post-link" href="/blog/{{ $blog->slug }}" target="_self"></a>
                    </div>
                    <div class="jltma-post-content ">
                        <div class="jltma-blog-inner-container">
                            <div class="jltma-blog-entry-container">
                                <h2 class="jltma-entry-title">
                                    <a href="/blog/{{ $blog->slug }}" target="_self">{{ $blog->title }}</a>
                                </h2>
                                <div class="jltma-post-entry-meta" style="margin-left:0px">
                                    <span class="jltma-post-date">
                                        <i class="fa fa-calendar fa-fw"></i>
                                        <a href="/blog/{{ $blog->slug }}" target="_self">{{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format(\'F j, Y\') : $blog->created_at->format(\'F j, Y\') }}</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="jltma-blog-post-content-wrap" style="margin-left:0px;">
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
';
            file_put_contents('resources/views/home.blade.php', $before . "\n" . $dynamicHtml . "\n" . $after);
            echo "Successfully replaced latest blogs.\n";
            exit;
        }
    }
}
echo "Could not find markers.\n";
