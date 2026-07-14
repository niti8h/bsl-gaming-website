@extends('layouts.app')
@section('title', $post->title)
@section('meta_description', $post->meta_description)

@section('content')
<main id="content" class="site-main post-{{ $post->id }} page type-page status-publish hentry">
	<div class="page-content">
		<div data-elementor-type="wp-page" class="elementor">
			
            <!-- Header Section -->
            <div class="elementor-element e-con-full e-flex e-con e-parent" style="padding-top: 60px; padding-bottom: 30px; background-color: var(--dark-bg, #121212);">
				<div class="elementor-element e-flex e-con-boxed e-con e-child">
					<div class="e-con-inner" style="max-width: 900px; margin: 0 auto; text-align: left;">
						
                        <div class="elementor-widget-container" style="margin-bottom: 15px;">
                            <h1 class="elementor-heading-title elementor-size-default" style="color: var(--royal-gold, #D4AF37); font-size: 2.5rem; line-height: 1.2;">{{ $post->title }}</h1>
                        </div>

                        <div class="post-meta-tags rt-el-post-meta" style="color: #aaa; font-size: 0.95rem; margin-bottom: 25px;">
                            <span class='date'>
                                <i class='far fa-calendar-alt' style="color: var(--royal-gold, #D4AF37);"></i> 
                                {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('F j, Y') : $post->created_at->format('F j, Y') }}
                            </span>
                        </div>

					</div>
				</div>
			</div>

            <!-- Content Section -->
            <div class="elementor-element e-con-full e-flex e-con e-parent" style="padding-bottom: 80px;">
				<div class="elementor-element e-flex e-con-boxed e-con e-child">
					<div class="e-con-inner" style="max-width: 900px; margin: 0 auto;">
                        
                        @if($post->image)
                            <div class="rt-img-holder tpg-el-image-wrap" style="margin-bottom: 40px;">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">
                            </div>
                        @endif

                        <div class="elementor-widget-text-editor tpg-el-content-wrapper" style="color: #e5e5e5; font-size: 1.1rem; line-height: 1.8;">
                            {!! $post->content !!}
                        </div>

					</div>
				</div>
			</div>

		</div>
	</div>
</main>

<style>
/* Style the Quill rich text outputs to match the native theme */
.elementor-widget-text-editor h2, 
.elementor-widget-text-editor h3, 
.elementor-widget-text-editor h4 {
    color: var(--royal-gold, #D4AF37);
    margin-top: 30px;
    margin-bottom: 15px;
}
.elementor-widget-text-editor p {
    margin-bottom: 20px;
}
.elementor-widget-text-editor a {
    color: var(--royal-gold, #D4AF37);
    text-decoration: underline;
}
.elementor-widget-text-editor ul, 
.elementor-widget-text-editor ol {
    margin-bottom: 20px;
    padding-left: 20px;
}
.elementor-widget-text-editor li {
    margin-bottom: 10px;
}
.elementor-widget-text-editor blockquote {
    border-left: 4px solid var(--royal-gold, #D4AF37);
    padding-left: 20px;
    margin-left: 0;
    font-style: italic;
    color: #ccc;
    background: rgba(212, 175, 55, 0.05);
    padding: 15px 20px;
    border-radius: 0 8px 8px 0;
}
</style>
@endsection
