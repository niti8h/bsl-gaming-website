
@extends('layouts.app')
@section('title', 'Blogs | BSL Gaming')

@php
    $blogs = \App\Models\Blog::orderBy('created_at', 'desc')->paginate(12);
@endphp

@push('styles')
<link rel='stylesheet' href='/wp-content/uploads/elementor/css/post-7836e8a2.css' media='all' />
<style>
/* Style the bootstrap pagination to match native */
.rt-pagination-wrap .pagination {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
    gap: 10px;
}
.rt-pagination-wrap .page-item .page-link {
    color: #111;
    border: 1px solid transparent;
    background: #f1f1f1;
    padding: 10px 15px;
    border-radius: 5px;
    font-weight: 600;
}
.rt-pagination-wrap .page-item.active .page-link {
    background: #b50d5e;
    color: #fff;
}
</style>
@endpush

@section('content')
<main id="content" class="site-main post-7836 page type-page status-publish hentry">

	
	<div class="page-content">
				<div data-elementor-type="wp-page" data-elementor-id="7836" class="elementor elementor-7836" data-elementor-post-type="page">
				<div class="elementor-element elementor-element-c9e6222 e-con-full e-flex e-con e-parent" data-id="c9e6222" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-35cbd99 e-flex e-con-boxed e-con e-child" data-id="35cbd99" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-14adc06 e-con-full e-flex e-con e-child" data-id="14adc06" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-4bed665 textoDegradado elementor-widget elementor-widget-heading" data-id="4bed665" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Read Our Blogs</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-e0624cb elementor-widget__width-inherit elementor-widget elementor-widget-text-editor" data-id="e0624cb" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									Explore our latest blogs on sports betting and online casino software development. We have covered deeper insights related to slot games, lottery, fantasy &amp; casino solutions in our blogs to let you decide how each solution could be a great fit for your business requirements.								</div>
				</div>
				</div>
					</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-f16c8d3 e-flex e-con-boxed e-con e-parent" data-id="f16c8d3" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-388519e elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading" data-id="388519e" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">READ OUR BLOGS</h3>				</div>
				</div>
					</div>
				</div>

		<div class="elementor-element elementor-element-6ab9bfa e-flex e-con-boxed e-con e-parent" data-id="6ab9bfa" data-element_type="container" data-e-type="container" id="wagergeeks-blog-post-all">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-0b8c03e post-grid elementor-widget-mobile__width-initial jltma-navigation-type-arrows jltma-carousel-style-carousel elementor-widget elementor-widget-ma-blog-post" data-id="0b8c03e" data-element_type="widget" data-e-type="widget" data-settings="{&quot;ma_el_post_grid_layout&quot;:&quot;grid&quot;,&quot;autoheight&quot;:&quot;yes&quot;,&quot;item_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;item_gap_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;item_gap_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;item_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;item_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]}}" data-widget_type="custom-blog-posts.default">
				<div class="elementor-widget-container">
					
											<div class="jltma-blog">

							

							<div class="jltma-blog-wrapper jltma-blog-grid jltma-row">
@forelse($blogs as $blog)
<div class="jltma-post-outer-container jltma-col-4" style="margin-bottom: 30px;">
    <div class="jltma-blog-post jltma-default-post classic">
        <div>
            <div class="jltma-post-thumbnail jltma-img-none jltma-img-shape-none">
                <a href="/blog/{{ $blog->slug }}" target="_self">
                    @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" style="width:100%; height:200px; object-fit:cover;" />
                    @else
                    <div style="width:100%; height:200px; background:#1e1e1e; display:flex; align-items:center; justify-content:center; color:#fff;">
                        <span>No Image</span>
                    </div>
                    @endif
                </a>
            </div>
        </div>
        <div class="jltma-blog-effect-container jltma-blog-none-effect">
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
                            <a href="/blog/{{ $blog->slug }}" target="_self">{{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('F j, Y') : $blog->created_at->format('F j, Y') }}</a>
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
@empty
<div style="width: 100%; text-align: center; padding: 50px; color: #fff;">No blogs found.</div>
@endforelse
</div>
<div class="rt-pagination-wrap" style="width: 100%; margin-top: 30px;">
    {{ $blogs->links('pagination::bootstrap-4') }}
</div>

									</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-274bf469 e-con-full elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-parent" data-id="274bf469" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-7e013301 e-con-full casa e-flex e-con e-child" data-id="7e013301" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-f4d5edf elementor-widget elementor-widget-heading" data-id="f4d5edf" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Start With Us!</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-ac86677 elementor-widget elementor-widget-heading" data-id="ac86677" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Join hands with us to elevate iGaming Journey Today</p>				</div>
				</div>
				<div class="elementor-element elementor-element-63e221ba elementor-widget elementor-widget-button" data-id="63e221ba" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="../contact/index.html" target="_blank" rel="nofollow">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<i aria-hidden="true" class="fas fa-comment-dots"></i>			</span>
									<span class="elementor-button-text">Connect Now</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-574dd80 e-con-full e-flex e-con e-parent" data-id="574dd80" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-7731946 e-con-full cta-wagerGeeks e-flex e-con e-child" data-id="7731946" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-d7f082b e-con-full e-flex e-con e-child" data-id="d7f082b" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-4731b56 e-con-full e-flex e-con e-child" data-id="4731b56" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-49389dc elementor-widget elementor-widget-heading" data-id="49389dc" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Start With Us!</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-52ed1b7 elementor-widget elementor-widget-heading" data-id="52ed1b7" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Join hands with us to elevate iGaming Journey Today</p>				</div>
				</div>
				<div class="elementor-element elementor-element-0a59586 elementor-align-center elementor-widget elementor-widget-button" data-id="0a59586" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="../contact/index.html" target="_blank" rel="nofollow">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<i aria-hidden="true" class="fas fa-comment-dots"></i>			</span>
									<span class="elementor-button-text">Connect Now</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-e69792e e-con-full elementor-hidden-mobile e-flex e-con e-child" data-id="e69792e" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-55df7e8 elementor-widget elementor-widget-image" data-id="55df7e8" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" src="https://wgeeks-site.s3.ap-south-1.amazonaws.com/Blogs/Start-With-Us.webp" title="" alt="" loading="lazy" />															</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
		
		
			</div>

	
</main>
@endsection
