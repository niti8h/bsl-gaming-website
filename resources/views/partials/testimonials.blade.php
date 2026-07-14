<?php
$testimonials = \App\Models\Testimonial::where("is_active", true)->orderBy("sort_order")->orderBy("id", "desc")->get();
?>
		<div class="elementor-element elementor-element-1a67b58 e-con-full e-flex e-con e-parent" data-id="1a67b58" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-b4409ce elementor-widget elementor-widget-elementskit-heading" data-id="b4409ce" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="elementskit-heading.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" ><div class="ekit-heading elementskit-section-title-wraper center   ekit_heading_tablet-   ekit_heading_mobile-"><h3 class="ekit-heading--title elementskit-section-title ">Testimonials</h3><div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider ekit-dotted"><div class="elementskit-border-divider ekit-dotted"></div></div></div></div>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-2aa85bef testimonial-custom-sec e-flex e-con-boxed e-con e-parent" data-id="2aa85bef" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-795d42e9 testimonial-sec elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-elementskit-testimonial" data-id="795d42e9" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="elementskit-testimonial.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" ><div class="elementskit-testimonial-slider arrow_inside slider-dotted" data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:true,&quot;dots&quot;:true,&quot;pauseOnHover&quot;:true,&quot;autoplay&quot;:false,&quot;speed&quot;:1000,&quot;slidesPerGroup&quot;:1,&quot;slidesPerView&quot;:1,&quot;loop&quot;:true,&quot;spaceBetween&quot;:&quot;&quot;,&quot;breakpoints&quot;:{&quot;320&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:10},&quot;768&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:10},&quot;1024&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:15}}}">
	<div class="ekit-main-swiper swiper">
		<div class="swiper-wrapper">
    @if(isset($testimonials) && $testimonials->count() > 0)
        @foreach($testimonials as $testimonial)
        <div class="swiper-slide">
            <div class="swiper-slide-inner">
                <div class="elementskit-testimonial_card" style="background-image: url();" >
                    <ul class="elementskit-stars">
                        @for($i = 0; $i < $testimonial->rating; $i++)
                        <li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
                        @endfor
                    </ul>
                    <p class="elementskit-commentor-coment">{{ $testimonial->content }}</p>
                    <span class="elementskit-profile-info">
                        <strong class="elementskit-author-name">{{ $testimonial->client_name }}</strong>
                        <span class="elementskit-author-des"></span>
                    </span>
                    <div class="xs-overlay elementor-repeater-item-6d78a37"></div>
                </div><!-- .testimonial_card END -->
            </div>
        </div>
        @endforeach
    @else
        <div class="swiper-slide">
            <div class="swiper-slide-inner">
                <div class="elementskit-testimonial_card" style="background-image: url();" >
                    <ul class="elementskit-stars">
                        <li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
                    </ul>
                    <p class="elementskit-commentor-coment">No testimonials available at the moment.</p>
                    <span class="elementskit-profile-info">
                        <strong class="elementskit-author-name">Admin</strong>
                        <span class="elementskit-author-des"></span>
                    </span>
                    <div class="xs-overlay elementor-repeater-item-6d78a37"></div>
                </div><!-- .testimonial_card END -->
            </div>
        </div>
    @endif
</div>

					<div class="swiper-pagination"></div>
		
					<div class="swiper-navigation-button swiper-button-prev">
				<i aria-hidden="true" class="icon icon-left-arrows"></i>			</div>
			<div class="swiper-navigation-button swiper-button-next">
				<i aria-hidden="true" class="icon icon-right-arrow1"></i>			</div>
			</div>
</div>
</div>				</div>
				</div>
					</div>
				</div>
