
@extends('layouts.app')
@section('title', $post->title)
@section('meta_description', $post->meta_description)
@section('body_class', 'single single-post postid-53062 single-format-standard')

@push('styles')
<link rel='stylesheet' href='/wp-content/uploads/elementor/css/post-4129c8f3.css' media='all' />
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
/* Fix the single blog design */
body {
    background-color: #050505;
}
.xpro-theme-builder-singular-wrapper {
    background-color: transparent;
}
.elementor-element-7ed34d0 {
    min-height: 400px; /* give the top banner some height */
    position: relative;
}
.elementor-element-7ed34d0::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.8));
}
#blog-single-section > .e-con-inner {
    background-color: #ffffff;
    border-radius: 20px;
    padding: 50px;
    margin-top: -150px; /* Pull up over the banner */
    position: relative;
    z-index: 10;
    box-shadow: 0 10px 40px rgba(0,0,0,0.3);
}
.elementor-element-580661b, .elementor-element-441afa7 {
    display: none !important; /* Hide redundant date container and duplicate banner */
}
.xpro-page-title-text {
    color: #111 !important; /* Title on white background */
}
.elementor-heading-title {
    color: var(--royal-gold, #D4AF37) !important;
}
.elementor-element-5926683 a, .elementor-element-5926683 i {
    color: #444 !important;
}
.elementor-element-5926683 p {
    color: #222 !important;
}
</style>
@endpush

@section('content')
	</header>

		<div class="xpro-theme-builder-singular-wrapper">
				<div data-elementor-type="xpro-themer" data-elementor-id="4129" class="elementor elementor-4129 post-53062 post type-post status-publish format-standard has-post-thumbnail hentry category-blog" data-elementor-post-type="xpro-themer">
				<div class="elementor-element elementor-element-7ed34d0 e-con-full single-post-image-wageer e-flex e-con e-parent" data-id="7ed34d0" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image: url('{{ asset('storage/' . $post->image) }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
				</div>
		<div class="elementor-element elementor-element-4736d4f      e-flex e-con-boxed e-con e-parent" data-id="4736d4f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-e28865f elementor-widget-laptop__width-initial elementor-widget elementor-widget-xpro-featured-image" data-id="e28865f" data-element_type="widget" data-e-type="widget" data-widget_type="xpro-featured-image.default">
				<div class="elementor-widget-container">
					<div class="xpro-featured-image">
@if($post->image)<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">@endif</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-580661b      e-flex e-con-boxed e-con e-parent" data-id="580661b" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-c09acec e-con-full jltma-toc-hide-heading e-flex e-con e-child" data-id="c09acec" data-element_type="container" data-e-type="container" id="inner-blog-single-page" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				</div>
		<div class="elementor-element elementor-element-6659017 e-flex e-con-boxed e-con e-child" data-id="6659017" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-7d5aac8 elementor-widget elementor-widget-heading" data-id="7d5aac8" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('F j, Y') : $post->created_at->format('F j, Y') }}</p>				</div>
				</div>
					</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-441afa7 e-flex e-con-boxed e-con e-parent" data-id="441afa7" data-element_type="container" data-e-type="container" id="blog-header-banner">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-b7b6c60 elementor-widget elementor-widget-xpro-featured-image" data-id="b7b6c60" data-element_type="widget" data-e-type="widget" data-widget_type="xpro-featured-image.default">
				<div class="elementor-widget-container">
					<div class="xpro-featured-image">
@if($post->image)<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">@endif</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-1385121 e-flex e-con-boxed e-con e-parent" data-id="1385121" data-element_type="container" data-e-type="container" id="blog-single-section">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-5926683 e-con-full sticky-parent e-flex e-con e-child" data-id="5926683" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-8d3034d e-con-full sticky-column e-flex e-con e-child" data-id="8d3034d" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-913f1a7 e-con-full e-flex e-con e-child" data-id="913f1a7" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-447f649 e-con-full  e-flex e-con e-child" data-id="447f649" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-b32c6d4 elementor-widget elementor-widget-image" data-id="b32c6d4" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="../../blogs/index.html">
							<img src="https://wgeeks-site.s3.ap-south-1.amazonaws.com/Blogs/flecha-izquierda.svg" title="" alt="" loading="lazy" />								</a>
															</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-e0031cb e-con-full  e-flex e-con e-child" data-id="e0031cb" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-06c8e34 elementor-widget elementor-widget-heading" data-id="06c8e34" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default"><a href="../../blogs/index.html">Back to all blogposts
</a></p>				</div>
				</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-e81098a ai-tool-feature-blog-single elementor-widget elementor-widget-shortcode" data-id="e81098a" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">
    <style>
    .ai-share-wrap{
        display:flex;
        align-items:center;
        gap:12px;
        margin:25px 0;
        flex-wrap:wrap;
    }

    .ai-share-title{
        font-size:20px;
        font-weight:700;
        color:#000;
        margin-right:5px;
        font-family: 'Poppins';
    }

    .ai-share-btn{
        width:44px;
        height:44px;
        border-radius:50%;
        border:1px solid #ddd;
        background:#fff;
        display:flex;
        align-items:center;
        justify-content:center;
        text-decoration:none;
        transition:.25s ease;
        box-shadow:0 1px 4px rgba(0,0,0,.08);
    }

    .ai-share-btn:hover{
        transform:translateY(-2px);
        box-shadow:0 6px 14px rgba(0,0,0,.15);
    }

    .ai-share-btn img{
        width:22px;
        height:22px;
        object-fit:contain;
    }

     span.ai-share-title-mobile-content {
    display: none;
    } 

.sticky-parent .sticky-column.e-flex.e-con.e-child {
    padding: 0px !important;
}		
		/* Tablet */
@media (min-width:768px) and (max-width:1024px){
    span.ai-share-title-mobile-content{
        display:block;
    }
	
	   .ai-share-wrap{
        gap:8px;
    }

    .ai-share-title{
        display:none;
    }
}
		
	@media (max-width: 767px) {
		.ai-share-wrap {
			margin: 0 0 30px 0;
		}
   .ai-share-title {
        display: none;
    }
  .ai-tool-feature-blog-single .sticky-column.e-flex.e-con.e-child {
        padding: 0 !important;
    }

 span.ai-share-title-mobile-content {
        display: inline-block;
    }

	}


    </style>

    <div class="ai-share-wrap">

        <span class="ai-share-title">Share at:</span>
        <span class="ai-share-title-mobile-content" style="font-size:18px;font-weight:700;color:#000;">Share:</span>

        <a class="ai-share-btn"
           href="https://www.perplexity.ai/search/new?q=Top+10+iGaming+Software+Development+Features+Tunisian+Operators+Need+-+https%3A%2F%2Fwww.wagergeeks.com%2Fblog%2Figaming-software-features-tunisia%2F"
           target="_blank" rel="noopener noreferrer">
            @if($post->image)<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">@endif
        </a>

        <a class="ai-share-btn"
           href="https://chatgpt.com/?q=Top+10+iGaming+Software+Development+Features+Tunisian+Operators+Need+-+https%3A%2F%2Fwww.wagergeeks.com%2Fblog%2Figaming-software-features-tunisia%2F"
           target="_blank" rel="noopener noreferrer">
            @if($post->image)<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">@endif
        </a>

        <a class="ai-share-btn"
           href="https://www.google.com/search?udm=50&amp;aep=11&amp;q=Top+10+iGaming+Software+Development+Features+Tunisian+Operators+Need+-+https%3A%2F%2Fwww.wagergeeks.com%2Fblog%2Figaming-software-features-tunisia%2F"
           target="_blank" rel="noopener noreferrer">
            @if($post->image)<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">@endif
        </a>

        <a class="ai-share-btn"
           href="https://x.com/i/grok?text=Top+10+iGaming+Software+Development+Features+Tunisian+Operators+Need+-+https%3A%2F%2Fwww.wagergeeks.com%2Fblog%2Figaming-software-features-tunisia%2F"
           target="_blank" rel="noopener noreferrer">
            @if($post->image)<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">@endif
        </a>

    </div>

    </div>
						</div>
				</div>
				<div class="elementor-element elementor-element-8473bea table-of-content-blog-single-post  uael-heading-align-left elementor-widget elementor-widget-ma-table-of-contents" data-id="8473bea" data-element_type="widget" data-e-type="widget" data-widget_type="ma-table-of-contents.default">
				<div class="elementor-widget-container">
							<div class="jltma-toc-main-wrapper" data-jltma-headings="h2,h3">
			<div class="jltma-toc-wrapper">
				<div class="jltma-toc-header">
					<span class="jltma-toc-heading elementor-inline-editing">Table Of Contents</span>
									</div>
								<div class="jltma-toc-toggle-content">
					<div class="jltma-toc-content-wrapper">
						
							<ul data-toc-headings="headings" class="jltma-toc-list jltma-toc-list-none" data-jltma-scroll=""></ul>
											</div>
				</div>
				<div class="jltma-toc-empty-note">
					<span>Add a header to begin generating the table of contents</span>
				</div>
			</div>
					</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-42f5806 e-con-full  e-flex e-con e-child" data-id="42f5806" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-2312ec5 elementor-widget elementor-widget-heading" data-id="2312ec5" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">SHARE</p>				</div>
				</div>
		<div class="elementor-element elementor-element-88d2ffc e-con-full e-flex e-con e-child" data-id="88d2ffc" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-1e0f4c8 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="1e0f4c8" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="https://www.linkedin.com/company/wagergeeks/" target="_blank" rel="nofollow">
							<img src="https://wgeeks-site.s3.ap-south-1.amazonaws.com/Blogs/002-facebook.svg" title="" alt="" loading="lazy" />								</a>
															</div>
				</div>
				<div class="elementor-element elementor-element-dd089e1 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="dd089e1" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="https://x.com/wagergeeks" target="_blank" rel="nofollow">
							<img src="https://wgeeks-site.s3.ap-south-1.amazonaws.com/Blogs/003-gorjeo.svg" title="" alt="" loading="lazy" />								</a>
															</div>
				</div>
				<div class="elementor-element elementor-element-13d6d6a elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="13d6d6a" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="https://www.instagram.com/wagergeeks/">
							<img src="https://wgeeks-site.s3.ap-south-1.amazonaws.com/Blogs/004-instagram.svg" title="" alt="" loading="lazy" />								</a>
															</div>
				</div>
				<div class="elementor-element elementor-element-b61823f elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="b61823f" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="https://www.linkedin.com/company/wagergeeks/">
							<img src="https://wgeeks-site.s3.ap-south-1.amazonaws.com/Blogs/005-logotipo-de-linkedin.svg" title="" alt="" loading="lazy" />								</a>
															</div>
				</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-7367fa7 e-con-full e-flex e-con e-child" data-id="7367fa7" data-element_type="container" data-e-type="container">
<p style="color: var(--royal-gold, #D4AF37); font-weight: 600; margin-bottom: 10px;">{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('F j, Y') : $post->created_at->format('F j, Y') }}</p>
				<div class="elementor-element elementor-element-fabd0c7 elementor-widget elementor-widget-xpro-page-title" data-id="fabd0c7" data-element_type="widget" data-e-type="widget" data-widget_type="xpro-page-title.default">
				<div class="elementor-widget-container">
					
<h1 class="xpro-page-title">
<span class="xpro-page-title-text">{{ $post->title }}</span>
</h1>
				</div>
				</div>
				<div class="elementor-element elementor-element-31d8748 elementor-widget elementor-widget-xpro-post-content" data-id="31d8748" data-element_type="widget" data-e-type="widget" data-widget_type="xpro-post-content.default">
				<div class="elementor-widget-container">
					
<div class="xpro-elementor-content">
{!! $post->content !!}
</div>

				</div>
				</div>
				</div>
					</div>
				</div>
				</div>
			</div>

@endsection
