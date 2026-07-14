@extends('layouts.app')
@section('content')


	
<main id="content" class="site-main post-20158 page type-page status-publish hentry">

	
	<div class="page-content">
				<div data-elementor-type="wp-page" data-elementor-id="20158" class="elementor elementor-20158" data-elementor-post-type="page">
				<div class="elementor-element elementor-element-49bca2b4 e-flex e-con-boxed e-con e-parent" data-id="49bca2b4" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-32a9c4e8 e-con-full home-tablet e-flex e-con e-child" data-id="32a9c4e8" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-22d85c6f e-con-full e-flex e-con e-child" data-id="22d85c6f" data-element_type="container" data-e-type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
				<div class="elementor-element elementor-element-c9e1026 textoDegradado elementor-widget elementor-widget-heading" data-id="c9e1026" data-element_type="widget" data-e-type="widget" id="igaming-development" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">{!! \App\Models\Setting::where('key', 'hero_title')->value('value') ?? '<span>iGaming</span> Software Development Services' !!}</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-1bb22a55 elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-text-editor" data-id="1bb22a55" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									{!! \App\Models\Setting::where('key', 'hero_subtitle')->value('value') ?? 'At BSL Gaming, we craft high-performing &amp; engaging software and iGaming solutions. Partner with us to get business-centric solutions that generate higher ROI &amp; captivate player&#8217;s interest.' !!}								</div>
				</div>
				<div class="elementor-element elementor-element-1ac7215 elementor-align-left bor elementor-mobile-align-center elementor-widget elementor-widget-xpro-button" data-id="1ac7215" data-element_type="widget" data-e-type="widget" data-widget_type="xpro-button.default">
				<div class="elementor-widget-container">
					
<a  href="#iGaming-development-services" class="xpro-elementor-button xpro-button-2d-animation hvr-grow xpro-align-icon-right">
<span class="xpro-elementor-button-inner">
<span class="xpro-button-text">Explore Our Services</span>
</span>
</a>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-49cf7180 e-con-full e-flex e-con e-child" data-id="49cf7180" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-876f02d elementor-widget elementor-widget-image" data-id="876f02d" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" src="{{ \App\Models\Setting::where('key', 'hero_image')->value('value') ? asset('storage/' . \App\Models\Setting::where('key', 'hero_image')->value('value')) : '/img/aws-images/iGaming-Software-Development-Services.webp' }}" title="" alt="" loading="lazy" />															</div>
				</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-38f35f28 scroll-section e-flex e-con-boxed e-con e-parent" data-id="38f35f28" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-4c6acfa8 con elementor-widget-mobile__width-inherit premium-adv-carousel__infinite premium-adv-carousel__horizontal elementor-widget elementor-widget-premium-media-wheel" data-id="4c6acfa8" data-element_type="widget" data-e-type="widget" data-widget_type="premium-media-wheel.default">
				<div class="elementor-widget-container">
							<div class="premium-adv-carousel-no-lightbox premium-adv-carousel__container" data-settings="{&quot;type&quot;:&quot;infinite&quot;,&quot;scroll&quot;:false,&quot;speed&quot;:50,&quot;pauseOnHover&quot;:true,&quot;dir&quot;:&quot;horizontal&quot;,&quot;reverse&quot;:&quot;normal&quot;,&quot;renderEvent&quot;:&quot;scroll&quot;}">

			<div style="visibility:hidden;" class="premium-adv-carousel__inner-container">

				<div class="premium-adv-carousel__items">

								<div class="premium-adv-carousel__item-outer-wrapper">
				<div class="elementor-repeater-item-53c36c4 premium-adv-carousel__item premium-adv-carousel__item-image">
					<div class="premium-adv-carousel__media-wrap">
														<img decoding="async" src="/img/aws-images/Sever-LessSever-Less.svg" alt="" class="premium-adv-carousel__item-img ">
												</div>

					
									</div>
			</div>
						<div class="premium-adv-carousel__item-outer-wrapper">
				<div class="elementor-repeater-item-b11cdb4 premium-adv-carousel__item premium-adv-carousel__item-image">
					<div class="premium-adv-carousel__media-wrap">
														<img decoding="async" src="/img/aws-images/Multi-Currency-SupportMulti-Currency-Support-icon.svg" alt="" class="premium-adv-carousel__item-img ">
												</div>

					
									</div>
			</div>
						<div class="premium-adv-carousel__item-outer-wrapper">
				<div class="elementor-repeater-item-9dddd19 premium-adv-carousel__item premium-adv-carousel__item-image">
					<div class="premium-adv-carousel__media-wrap">
														<img decoding="async" src="/img/aws-images/Custom-Website-DevelopmentCustom-Website-Development-1.svg" alt="" class="premium-adv-carousel__item-img ">
												</div>

					
									</div>
			</div>
						<div class="premium-adv-carousel__item-outer-wrapper">
				<div class="elementor-repeater-item-c5bb167 premium-adv-carousel__item premium-adv-carousel__item-image">
					<div class="premium-adv-carousel__media-wrap">
														<img decoding="async" src="/img/aws-images/Igaming-Software-DevelopmentIgaming-Software-Development.svg" alt="" class="premium-adv-carousel__item-img ">
												</div>

					
									</div>
			</div>
						<div class="premium-adv-carousel__item-outer-wrapper">
				<div class="elementor-repeater-item-a587356 premium-adv-carousel__item premium-adv-carousel__item-image">
					<div class="premium-adv-carousel__media-wrap">
														<img decoding="async" src="/img/aws-images/Live-Betting-Experience-1.svg" alt="" class="premium-adv-carousel__item-img ">
												</div>

					
									</div>
			</div>
						<div class="premium-adv-carousel__item-outer-wrapper">
				<div class="elementor-repeater-item-944eaf7 premium-adv-carousel__item premium-adv-carousel__item-image">
					<div class="premium-adv-carousel__media-wrap">
														<img decoding="async" src="/img/aws-images/Multi-Lingual-SupportMulti-Lingual-Support-1.svg" alt="" class="premium-adv-carousel__item-img ">
												</div>

					
									</div>
			</div>
							</div>
			</div>
		</div>
						</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-64d8e499 e-flex e-con-boxed e-con e-parent" data-id="64d8e499" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-4433a3cc e-flex e-con-boxed e-con e-child" data-id="4433a3cc" data-element_type="container" data-e-type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-5386b983 elementor-widget-laptop__width-initial elementor-widget-mobile__width-initial elementor-widget__width-initial textoDegradado elementor-widget elementor-widget-heading" data-id="5386b983" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default"><span>LEADING &amp; TRUSTED iGAMING SOFTWARE DEVELOPMENT <br>COMPANY</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-2aab7597 elementor-widget__width-initial elementor-widget-laptop__width-initial elementor-widget elementor-widget-text-editor" data-id="2aab7597" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Renowned for its IT services and unparalleled performance, BSL Gaming develops scalable and captivating software solutions<span style="font-weight: 400;"><strong> </strong>that set new standards. Adhering to the project requirements, we continually push the boundaries of creativity, delivering unforgettable entertainment experiences. </span></p><p><span style="font-weight: 400;">With a proven track record of success and excellence in iGaming, BSL Gaming remains the trusted choice for businesses, committed to delivering 100% client success. Additionally, our team of experts focuses on the client&#8217;s detailed requirements. Navigating step-by-step with project analysis, we develop iGaming solutions</span><span style="font-weight: 400;"> with enhanced user experience.</span></p>								</div>
				</div>
					</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-24985cfa e-con-full build-engaging e-flex e-con e-parent" data-id="24985cfa" data-element_type="container" data-e-type="container" id="inner-container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-6c0a4332 e-con-full casa e-flex e-con e-child" data-id="6c0a4332" data-element_type="container" data-e-type="container" id="engaging-container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
				<div class="elementor-element elementor-element-b848b23 elementor-widget-laptop__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading" data-id="b848b23" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">WANT TO BUILD AN ENGAGING SOFTWARE SOLUTION?
</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-52da9870 elementor-widget elementor-widget-button" data-id="52da9870" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="/contact" target="_blank" rel="nofollow">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<i aria-hidden="true" class="far fa-comment-dots"></i>			</span>
									<span class="elementor-button-text">Connect Now!</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-48fa44f1 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="48fa44f1" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6524bb4b" data-id="6524bb4b" data-element_type="column" data-e-type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-74c86e2 textoDegradado elementor-widget elementor-widget-heading" data-id="74c86e2" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default"><span>OUR EXPERTISE</span> IN iGAMING </h3>				</div>
				</div>
				<div class="elementor-element elementor-element-a331755 elementor-widget elementor-widget-elementskit-heading" data-id="a331755" data-element_type="widget" data-e-type="widget" data-widget_type="elementskit-heading.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" ><div class="ekit-heading elementskit-section-title-wraper center   ekit_heading_tablet-   ekit_heading_mobile-"><div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider ekit-dotted"><div class="elementskit-border-divider ekit-dotted"></div></div></div></div>				</div>
				</div>
		<div class="elementor-element elementor-element-fc2e915 e-grid e-con-boxed e-con e-parent" data-id="fc2e915" data-element_type="container" data-e-type="container" id="iGaming-development-services" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-ad4ab0b ekit-equal-height-enable solution-igamming-sec elementor-widget elementor-widget-elementskit-icon-box" data-id="ad4ab0b" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-shrink   ">
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Full Stack iGaming Development                </h3>
                        		  	<p><span class="solution-experts-point">
	<i class="fa-solid fa-check"></i> 
	<span>Customizable Gaming Solutions.</span>
</span>

<span class="solution-experts-point">
	<i class="fa-solid fa-check"></i>  
	<span>Cutting-Edge Technology.</span>
</span>


<span class="solution-experts-point">
	<i class="fa-solid fa-check"></i> 
	<span> Sportsbook Software Development.</span>
</span>


<span class="solution-experts-point">
	<i class="fa-solid fa-check"></i> 
	<span>Casino Game Development.</span>
</span>

<span class="solution-experts-point">
	<i class="fa-solid fa-check"></i>
	<span> White-Label Solutions.</span>
</span>
</p>
                                </div>
        
        
                </div>
        </div>				</div>
				</div>
				<div class="elementor-element elementor-element-249b50c ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box" data-id="249b50c" data-element_type="widget" data-e-type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-shrink   ">
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Feed Integration &amp; Customization                </h3>
                        		  	<p><span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Seamless Feed Integration.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Tailored Business Solutions.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Real-Time Synchronization Of Data.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Advanced Security Measures.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Optimized Performance.</span>
</span>
</p>
                                </div>
        
        
                </div>
        </div>				</div>
				</div>
				<div class="elementor-element elementor-element-62b1a09 ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box" data-id="62b1a09" data-element_type="widget" data-e-type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-shrink   ">
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Customized Sportsbook Solutions                </h3>
                        		  	<p><span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Advanced Odds Management.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Increased Business ROI.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>White-label sports betting platform.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Pre-Match and Live In-Play Bets.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Scalable Sports Betting Solutions.</span>
</span>
</p>
                                </div>
        
        
                </div>
        </div>				</div>
				</div>
				<div class="elementor-element elementor-element-15eae3b ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box" data-id="15eae3b" data-element_type="widget" data-e-type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-shrink   ">
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Custom Casino Game Development                </h3>
                        		  	<p><span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Custom Game Lobby &amp; Provider Lobby Integration.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Multi-language Support.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Custom Casino Provider Integration.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Immersive Gaming Experience.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>End-to-End Product Development.</span>
</span>
</p>
                                </div>
        
        
                </div>
        </div>				</div>
				</div>
				<div class="elementor-element elementor-element-b78e4dd ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box" data-id="b78e4dd" data-element_type="widget" data-e-type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-shrink   ">
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    UI/UX Design Services                </h3>
                        		  	<p><span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Intuitive Navigation.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>100% Responsive Layout.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Personalized User Experience.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Analytics &amp; Data-Driven Insights.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Advanced Accessibility Features.</span>
</span>
</p>
                                </div>
        
        
                </div>
        </div>				</div>
				</div>
				<div class="elementor-element elementor-element-d6154c4 ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box" data-id="d6154c4" data-element_type="widget" data-e-type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-shrink   ">
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    QA &amp; Testing Services                </h3>
                        		  	<p><span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Real-Time Support &amp; Monitoring.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>End-to-End Product Testing.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Enhanced Gameplay &amp; User Satisfaction.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Regulatory Compliance-Focused Solutions.</span>
</span>

<span class="solution-experts-point">
    <i class="fa-solid fa-check"></i>
    <span>Reduced Risk of Bugs and Issues.</span>
</span>
</p>
                                </div>
        
        
                </div>
        </div>				</div>
				</div>
					</div>
				</div>
					</div>
		</div>
					</div>
		</section>
		<div class="elementor-element elementor-element-75425d09 e-con-full e-flex e-con e-parent" data-id="75425d09" data-element_type="container" data-e-type="container" id="industries" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-612ad13d elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading" data-id="612ad13d" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Industries we Focus On</h3>				</div>
				</div>
		<div class="elementor-element elementor-element-2e8e7326 e-con-full e-flex e-con e-child" data-id="2e8e7326" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-element elementor-element-2f3911a e-con-full industries-focus-sec e-flex e-con e-child" data-id="2f3911a" data-element_type="container" data-e-type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
				<div class="elementor-element elementor-element-c960567 flipcards-industries elementor-widget-mobile__width-initial pa-carousel-template pa-carousel-horizontal pa-arrows-default elementor-widget elementor-widget-premium-carousel-widget" data-id="c960567" data-element_type="widget" data-e-type="widget" data-widget_type="premium-carousel-widget.default">
				<div class="elementor-widget-container">
							<div id="premium-carousel-wrapper-c960567" class="premium-carousel-wrapper premium-carousel-hidden carousel-wrapper-c960567 " data-settings="{&quot;vertical&quot;:false,&quot;appearance&quot;:&quot;single&quot;,&quot;slidesToShow&quot;:4,&quot;infinite&quot;:true,&quot;speed&quot;:300,&quot;fade&quot;:false,&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:5000,&quot;draggable&quot;:true,&quot;touchMove&quot;:true,&quot;adaptiveHeight&quot;:false,&quot;variableWidth&quot;:false,&quot;cssEase&quot;:&quot;ease&quot;,&quot;pauseOnHover&quot;:false,&quot;centerMode&quot;:false,&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;slidesDesk&quot;:4,&quot;slidesTab&quot;:2,&quot;slidesMob&quot;:1,&quot;animation&quot;:&quot;null&quot;,&quot;tabletBreak&quot;:1025,&quot;mobileBreak&quot;:768,&quot;navigation&quot;:[&quot;&quot;,&quot;&quot;,&quot;&quot;,&quot;&quot;,&quot;&quot;,&quot;&quot;,&quot;&quot;,&quot;&quot;],&quot;carouselNavigation&quot;:true,&quot;templatesNumber&quot;:8,&quot;hasNavSlider&quot;:false,&quot;mouseTilt&quot;:false,&quot;mouseTiltRev&quot;:false}">
			<!-- Dots -->
			
							<div class="premium-carousel-nav-arrow-prev">
					<a type="button" data-role="none" class="carousel-arrow carousel-prev" aria-label="Previous" role="button">
													<i class="fas fa-chevron-left" aria-hidden="true"></i>
												</a>
					</div>
					<div class="premium-carousel-nav-arrow-next">
						<a type="button" data-role="none" class="carousel-arrow carousel-next" aria-label="Next" role="button">
															<i class="fas fa-chevron-right" aria-hidden="true"></i>
														</a>
					</div>
			
			<!-- Main Slides -->
			<div id="premium-carousel-c960567" class="premium-carousel-inner">
										<div class="premium-carousel-template item-wrapper" >
							<style>.elementor-3741 .elementor-element.elementor-element-94de22f{--display:flex;--min-height:0px;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{background-color:transparent;background-image:radial-gradient(at center center, var( --e-global-color-secondary ) 0%, #373535 80%);border-style:none;padding:0px 0px 0px 0px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{background-color:transparent;background-image:linear-gradient(180deg, var( --e-global-color-secondary ) 0%, var( --e-global-color-primary ) 100%);padding:20px 20px 20px 20px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__overlay{background-color:rgba(0, 0, 0, 0.70);transition-duration:800ms !important;opacity:100%;}.elementor-3741 .elementor-element.elementor-element-434c7c7{width:100%;max-width:100%;}.elementor-3741 .elementor-element.elementor-element-434c7c7 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;border-style:none;}.elementor-3741 .elementor-element.elementor-element-434c7c7.xpro-widget-bg-overlay:before{transition:background 0.3s;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:320px;--duration:800ms;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel{border-radius:20px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon img{width:88%;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon{background-color:#FFFFFF00;width:243px;height:243px;border-radius:0px;border-style:none;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__element{margin:0px 0px 0px 0px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:800;line-height:24px;text-shadow:0px 0px 10px rgba(0,0,0,0.3);margin-top:8px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__description{color:var( --e-global-color-secondary );font-family:"Montserrat", Sans-serif;font-size:16px;font-weight:800;margin-top:8px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger{font-size:20px;color:#303030;opacity:100%;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger svg{fill:#303030;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover{color:#303030;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover svg{fill:#303030;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon{color:#d9d9d9;background-color:#6a6a6a;width:62px;height:62px;border-radius:100px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg{fill:#d9d9d9 !important;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg path{fill:#d9d9d9 !important;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__description{color:#FFFFFF;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue_btn{padding:10px 20px 10px 20px;background-color:#bfbfbf;color:#ffffff;margin-top:20px;display:inline-block;border-radius:100px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue_btn:hover{background-color:#8d8d8d;color:#ffffff;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger{font-size:20px;color:#ececec;opacity:100%;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger svg{fill:#ececec;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover{color:#ececec;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover svg{fill:#ececec;}@media(max-width:767px){.elementor-3741 .elementor-element.elementor-element-94de22f{--content-width:95%;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-3741 .elementor-element.elementor-element-94de22f.e-con{--align-self:center;}.elementor-3741 .elementor-element.elementor-element-434c7c7 > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:360px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{padding:0px 10px 0px 10px;}.elementor-3741 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{padding:0px 10px 0px 10px;}}@media(min-width:768px){.elementor-3741 .elementor-element.elementor-element-94de22f{--content-width:350px;}}</style>		<div data-elementor-type="container" data-elementor-id="3741" class="elementor elementor-3741" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-94de22f e-flex e-con-boxed e-con e-parent" data-id="94de22f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-434c7c7 elementor-widget__width-inherit elementor-widget elementor-widget-ucaddon_flip_box" data-id="434c7c7" data-element_type="widget" data-e-type="widget" data-widget_type="ucaddon_flip_box.default">
				<div class="elementor-widget-container">
					
<!-- start Flip Box -->
		<link id='uc_ac_assets_file_ue_flipbox_styles_css_12353-css' href='/wp-content/uploads/ac_assets/uc_flip_box_base/animations/ue-flipbox-styles.css' type='text/css' rel='stylesheet' >

<style>/* widget: Flip Box */

/* elementor container support */
.e-con-inner>.elementor-widget-ucaddon_flip_box, .e-con>.elementor-widget-ucaddon_flip_box {
    width: var(--container-widget-width);
    --flex-grow: var(--container-widget-flex-grow);
}

#uc_flip_box_elementor_434c7c7 .ue-flip-box__panel.ue-flip-box__panel--front,
#uc_flip_box_elementor_434c7c7 .ue-flip-box__panel.ue-flip-box__panel--back {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden; 
}

#uc_flip_box_elementor_434c7c7 .ue-flip-box__panel__wrapper{
  pointer-events: all;
}


#uc_flip_box_elementor_434c7c7 .ue-flip-box__panel--back .ue_btn{
	display: inline-block;
}
 

	





#uc_flip_box_elementor_434c7c7 .ue-flip-box__panel--front-overlay, #uc_flip_box_elementor_434c7c7 .ue-flip-box__panel--back-overlay
{
  position:absolute;
  top:0;
  bottom:0;
  right:0;
  left:0;
  z-index:-1;
}

#uc_flip_box_elementor_434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon img{
  max-width: none;
}


</style>

<div id="uc_flip_box_elementor_434c7c7" class="ue-flip-box" data-id="uc_flip_box_elementor_434c7c7" data-closeonbody='false'>
  
      <div class="ue-flip-box__container uc-hide ue-flip_left ue-flip-box__container--hover" tabindex="0">
      
    <div class="ue-flip-box__panel ue-flip-box__panel--front">
      <div class="ue-flip-box__panel--front-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                                         <div class="ue-flip-box__panel__element ue-flip-box__icon"><img decoding="async" src="/img/aws-images/Industries-we-Focus-On-flip6.png" title="" alt=""  src="/img/aws-images/Industries-we-Focus-On-flip6.png"></div>                                                      <div class="ue-flip-box__panel__element ue-flip-box__title">SportsBook Platform<br>Development</div>                                                  <div class="ue-flip-box__panel__element ue-flip-box__description"><p style="text-align: left;">Read more...</p></div>        </div>
      </div>
    </div>
    

      
    <div class="ue-flip-box__panel ue-flip-box__panel--back">
      <div class="ue-flip-box__panel--back-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>Specializing in sportsbook platform development services, BSL Gaming stands as a one-stop solution in the competitive landscape of this industry. We boast a team of expert software developers who excel in crafting tailored solutions to meet unique business requirements.</p></div>                  </div>
      </div>
    </div>
    
  </div>
  
   
      
        
</div>
<!-- end Flip Box -->				</div>
				</div>
					</div>
				</div>
				</div>
		
													</div>
												<div class="premium-carousel-template item-wrapper" >
							<style>.elementor-3772 .elementor-element.elementor-element-94de22f{--display:flex;--min-height:0px;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{background-color:transparent;background-image:radial-gradient(at center center, var( --e-global-color-secondary ) 0%, #373535 80%);border-style:none;padding:0px 0px 0px 0px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{background-color:transparent;background-image:linear-gradient(180deg, var( --e-global-color-secondary ) 0%, var( --e-global-color-primary ) 100%);padding:20px 20px 20px 20px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__overlay{background-color:rgba(0, 0, 0, 0.70);transition-duration:800ms !important;opacity:100%;}.elementor-3772 .elementor-element.elementor-element-434c7c7{width:100%;max-width:100%;}.elementor-3772 .elementor-element.elementor-element-434c7c7 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;border-style:none;}.elementor-3772 .elementor-element.elementor-element-434c7c7.xpro-widget-bg-overlay:before{transition:background 0.3s;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:320px;--duration:800ms;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel{border-radius:20px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon img{width:88%;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon{background-color:#FFFFFF00;width:243px;height:243px;border-radius:0px;border-style:none;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__element{margin:0px 0px 0px 0px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:800;line-height:24px;text-shadow:0px 0px 10px rgba(0,0,0,0.3);margin-top:8px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__description{color:var( --e-global-color-secondary );font-family:"Montserrat", Sans-serif;font-size:16px;font-weight:800;margin-top:8px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger{font-size:20px;color:#303030;opacity:100%;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger svg{fill:#303030;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover{color:#303030;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover svg{fill:#303030;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon{color:#d9d9d9;background-color:#6a6a6a;width:62px;height:62px;border-radius:100px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg{fill:#d9d9d9 !important;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg path{fill:#d9d9d9 !important;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__description{color:#FFFFFF;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue_btn{padding:10px 20px 10px 20px;background-color:#bfbfbf;color:#ffffff;margin-top:20px;display:inline-block;border-radius:100px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue_btn:hover{background-color:#8d8d8d;color:#ffffff;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger{font-size:20px;color:#ececec;opacity:100%;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger svg{fill:#ececec;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover{color:#ececec;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover svg{fill:#ececec;}@media(max-width:767px){.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:360px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{padding:0px 10px 0px 10px;}.elementor-3772 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{padding:0px 10px 0px 10px;}}@media(min-width:768px){.elementor-3772 .elementor-element.elementor-element-94de22f{--content-width:350px;}}</style>		<div data-elementor-type="container" data-elementor-id="3772" class="elementor elementor-3772" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-94de22f e-flex e-con-boxed e-con e-parent" data-id="94de22f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-434c7c7 elementor-widget__width-inherit elementor-widget elementor-widget-ucaddon_flip_box" data-id="434c7c7" data-element_type="widget" data-e-type="widget" data-widget_type="ucaddon_flip_box.default">
				<div class="elementor-widget-container">
					
<!-- start Flip Box -->
		<link id='uc_ac_assets_file_ue_flipbox_styles_css_12353-css' href='/wp-content/uploads/ac_assets/uc_flip_box_base/animations/ue-flipbox-styles.css' type='text/css' rel='stylesheet' >

<style>/* widget: Flip Box */

/* elementor container support */
.e-con-inner>.elementor-widget-ucaddon_flip_box, .e-con>.elementor-widget-ucaddon_flip_box {
    width: var(--container-widget-width);
    --flex-grow: var(--container-widget-flex-grow);
}

#uc_flip_box_elementor_434c7c72 .ue-flip-box__panel.ue-flip-box__panel--front,
#uc_flip_box_elementor_434c7c72 .ue-flip-box__panel.ue-flip-box__panel--back {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden; 
}

#uc_flip_box_elementor_434c7c72 .ue-flip-box__panel__wrapper{
  pointer-events: all;
}


#uc_flip_box_elementor_434c7c72 .ue-flip-box__panel--back .ue_btn{
	display: inline-block;
}
 

	





#uc_flip_box_elementor_434c7c72 .ue-flip-box__panel--front-overlay, #uc_flip_box_elementor_434c7c72 .ue-flip-box__panel--back-overlay
{
  position:absolute;
  top:0;
  bottom:0;
  right:0;
  left:0;
  z-index:-1;
}

#uc_flip_box_elementor_434c7c72 .ue-flip-box__panel--front .ue-flip-box__icon img{
  max-width: none;
}


</style>

<div id="uc_flip_box_elementor_434c7c72" class="ue-flip-box" data-id="uc_flip_box_elementor_434c7c72" data-closeonbody='false'>
  
      <div class="ue-flip-box__container uc-hide ue-flip_left ue-flip-box__container--hover" tabindex="0">
      
    <div class="ue-flip-box__panel ue-flip-box__panel--front">
      <div class="ue-flip-box__panel--front-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                                         <div class="ue-flip-box__panel__element ue-flip-box__icon"><img decoding="async" src="/img/aws-images/Industries-we-Focus-On-flip7.png" title="" alt=""  src="/img/aws-images/Industries-we-Focus-On-flip7.png"></div>                                                      <div class="ue-flip-box__panel__element ue-flip-box__title">Sports Betting Software Development</div>                                                  <div class="ue-flip-box__panel__element ue-flip-box__description"><p style="text-align: left;">Read more...</p></div>        </div>
      </div>
    </div>
    

      
    <div class="ue-flip-box__panel ue-flip-box__panel--back">
      <div class="ue-flip-box__panel--back-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>Uplift your business ROI by leveraging high-quality sports betting solutions with third-party integration, &amp; high-quality features. Our tailored approach empowers businesses to launch, manage, &amp; scale their sports betting operations, influencing players to play longer.</p></div>                  </div>
      </div>
    </div>
    
  </div>
  
   
      
        
</div>
<!-- end Flip Box -->				</div>
				</div>
					</div>
				</div>
				</div>
		
													</div>
												<div class="premium-carousel-template item-wrapper" >
							<style>.elementor-3771 .elementor-element.elementor-element-94de22f{--display:flex;--min-height:0px;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{background-color:transparent;background-image:radial-gradient(at center center, var( --e-global-color-secondary ) 0%, #373535 80%);border-style:none;padding:0px 0px 0px 0px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{background-color:transparent;background-image:linear-gradient(180deg, var( --e-global-color-secondary ) 0%, var( --e-global-color-primary ) 100%);padding:20px 20px 20px 20px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__overlay{background-color:rgba(0, 0, 0, 0.70);transition-duration:800ms !important;opacity:100%;}.elementor-3771 .elementor-element.elementor-element-434c7c7{width:100%;max-width:100%;}.elementor-3771 .elementor-element.elementor-element-434c7c7 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;border-style:none;}.elementor-3771 .elementor-element.elementor-element-434c7c7.xpro-widget-bg-overlay:before{transition:background 0.3s;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:320px;--duration:800ms;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel{border-radius:20px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon img{width:88%;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon{background-color:#FFFFFF00;width:243px;height:243px;border-radius:0px;border-style:none;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__element{margin:0px 0px 0px 0px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:800;line-height:24px;text-shadow:0px 0px 10px rgba(0,0,0,0.3);margin-top:8px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__description{color:var( --e-global-color-secondary );font-family:"Montserrat", Sans-serif;font-size:16px;font-weight:800;margin-top:8px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger{font-size:20px;color:#303030;opacity:100%;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger svg{fill:#303030;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover{color:#303030;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover svg{fill:#303030;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon{color:#d9d9d9;background-color:#6a6a6a;width:62px;height:62px;border-radius:100px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg{fill:#d9d9d9 !important;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg path{fill:#d9d9d9 !important;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__description{color:#FFFFFF;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue_btn{padding:10px 20px 10px 20px;background-color:#bfbfbf;color:#ffffff;margin-top:20px;display:inline-block;border-radius:100px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue_btn:hover{background-color:#8d8d8d;color:#ffffff;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger{font-size:20px;color:#ececec;opacity:100%;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger svg{fill:#ececec;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover{color:#ececec;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover svg{fill:#ececec;}@media(max-width:767px){.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:360px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{padding:0px 10px 0px 10px;}.elementor-3771 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{padding:0px 10px 0px 10px;}}@media(min-width:768px){.elementor-3771 .elementor-element.elementor-element-94de22f{--content-width:350px;}}</style>		<div data-elementor-type="container" data-elementor-id="3771" class="elementor elementor-3771" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-94de22f e-flex e-con-boxed e-con e-parent" data-id="94de22f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-434c7c7 elementor-widget__width-inherit elementor-widget elementor-widget-ucaddon_flip_box" data-id="434c7c7" data-element_type="widget" data-e-type="widget" data-widget_type="ucaddon_flip_box.default">
				<div class="elementor-widget-container">
					
<!-- start Flip Box -->
		<link id='uc_ac_assets_file_ue_flipbox_styles_css_12353-css' href='/wp-content/uploads/ac_assets/uc_flip_box_base/animations/ue-flipbox-styles.css' type='text/css' rel='stylesheet' >

<style>/* widget: Flip Box */

/* elementor container support */
.e-con-inner>.elementor-widget-ucaddon_flip_box, .e-con>.elementor-widget-ucaddon_flip_box {
    width: var(--container-widget-width);
    --flex-grow: var(--container-widget-flex-grow);
}

#uc_flip_box_elementor_434c7c73 .ue-flip-box__panel.ue-flip-box__panel--front,
#uc_flip_box_elementor_434c7c73 .ue-flip-box__panel.ue-flip-box__panel--back {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden; 
}

#uc_flip_box_elementor_434c7c73 .ue-flip-box__panel__wrapper{
  pointer-events: all;
}


#uc_flip_box_elementor_434c7c73 .ue-flip-box__panel--back .ue_btn{
	display: inline-block;
}
 

	





#uc_flip_box_elementor_434c7c73 .ue-flip-box__panel--front-overlay, #uc_flip_box_elementor_434c7c73 .ue-flip-box__panel--back-overlay
{
  position:absolute;
  top:0;
  bottom:0;
  right:0;
  left:0;
  z-index:-1;
}

#uc_flip_box_elementor_434c7c73 .ue-flip-box__panel--front .ue-flip-box__icon img{
  max-width: none;
}


</style>

<div id="uc_flip_box_elementor_434c7c73" class="ue-flip-box" data-id="uc_flip_box_elementor_434c7c73" data-closeonbody='false'>
  
      <div class="ue-flip-box__container uc-hide ue-flip_left ue-flip-box__container--hover" tabindex="0">
      
    <div class="ue-flip-box__panel ue-flip-box__panel--front">
      <div class="ue-flip-box__panel--front-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                                         <div class="ue-flip-box__panel__element ue-flip-box__icon"><img decoding="async" src="/img/aws-images/Industries-we-Focus-On-flip8.png" title="" alt=""  src="/img/aws-images/Industries-we-Focus-On-flip8.png"></div>                                                      <div class="ue-flip-box__panel__element ue-flip-box__title">UI-UX Design <br>& Development</div>                                                  <div class="ue-flip-box__panel__element ue-flip-box__description"><p style="text-align: left;">Read more...</p></div>        </div>
      </div>
    </div>
    

      
    <div class="ue-flip-box__panel ue-flip-box__panel--back">
      <div class="ue-flip-box__panel--back-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>With a team of experts who deeply understand player psychology, we develop intuitive sports betting solutions that elevate gaming experiences to new heights. Our focus is to enhance the user journey, ensuring accessibility &amp; making the product visually appealing.</p></div>                  </div>
      </div>
    </div>
    
  </div>
  
   
      
        
</div>
<!-- end Flip Box -->				</div>
				</div>
					</div>
				</div>
				</div>
		
													</div>
												<div class="premium-carousel-template item-wrapper" >
							<style>.elementor-3773 .elementor-element.elementor-element-94de22f{--display:flex;--min-height:0px;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{background-color:transparent;background-image:radial-gradient(at center center, var( --e-global-color-secondary ) 0%, #373535 80%);border-style:none;padding:0px 0px 0px 0px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{background-color:transparent;background-image:linear-gradient(180deg, var( --e-global-color-secondary ) 0%, var( --e-global-color-primary ) 100%);padding:20px 20px 20px 20px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__overlay{background-color:rgba(0, 0, 0, 0.70);transition-duration:800ms !important;opacity:100%;}.elementor-3773 .elementor-element.elementor-element-434c7c7{width:100%;max-width:100%;}.elementor-3773 .elementor-element.elementor-element-434c7c7 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;border-style:none;}.elementor-3773 .elementor-element.elementor-element-434c7c7.xpro-widget-bg-overlay:before{transition:background 0.3s;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:320px;--duration:800ms;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel{border-radius:20px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon img{width:88%;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon{background-color:#FFFFFF00;width:243px;height:243px;border-radius:0px;border-style:none;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__element{margin:0px 0px 0px 0px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:800;line-height:24px;text-shadow:0px 0px 10px rgba(0,0,0,0.3);margin-top:8px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__description{color:var( --e-global-color-secondary );font-family:"Montserrat", Sans-serif;font-size:16px;font-weight:800;margin-top:8px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger{font-size:20px;color:#303030;opacity:100%;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger svg{fill:#303030;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover{color:#303030;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover svg{fill:#303030;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon{color:#d9d9d9;background-color:#6a6a6a;width:62px;height:62px;border-radius:100px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg{fill:#d9d9d9 !important;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg path{fill:#d9d9d9 !important;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__description{color:#FFFFFF;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue_btn{padding:10px 20px 10px 20px;background-color:#bfbfbf;color:#ffffff;margin-top:20px;display:inline-block;border-radius:100px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue_btn:hover{background-color:#8d8d8d;color:#ffffff;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger{font-size:20px;color:#ececec;opacity:100%;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger svg{fill:#ececec;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover{color:#ececec;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover svg{fill:#ececec;}@media(max-width:767px){.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:360px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{padding:0px 10px 0px 10px;}.elementor-3773 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{padding:0px 10px 0px 10px;}}@media(min-width:768px){.elementor-3773 .elementor-element.elementor-element-94de22f{--content-width:350px;}}</style>		<div data-elementor-type="container" data-elementor-id="3773" class="elementor elementor-3773" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-94de22f e-flex e-con-boxed e-con e-parent" data-id="94de22f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-434c7c7 elementor-widget__width-inherit elementor-widget elementor-widget-ucaddon_flip_box" data-id="434c7c7" data-element_type="widget" data-e-type="widget" data-widget_type="ucaddon_flip_box.default">
				<div class="elementor-widget-container">
					
<!-- start Flip Box -->
		<link id='uc_ac_assets_file_ue_flipbox_styles_css_12353-css' href='/wp-content/uploads/ac_assets/uc_flip_box_base/animations/ue-flipbox-styles.css' type='text/css' rel='stylesheet' >

<style>/* widget: Flip Box */

/* elementor container support */
.e-con-inner>.elementor-widget-ucaddon_flip_box, .e-con>.elementor-widget-ucaddon_flip_box {
    width: var(--container-widget-width);
    --flex-grow: var(--container-widget-flex-grow);
}

#uc_flip_box_elementor_434c7c74 .ue-flip-box__panel.ue-flip-box__panel--front,
#uc_flip_box_elementor_434c7c74 .ue-flip-box__panel.ue-flip-box__panel--back {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden; 
}

#uc_flip_box_elementor_434c7c74 .ue-flip-box__panel__wrapper{
  pointer-events: all;
}


#uc_flip_box_elementor_434c7c74 .ue-flip-box__panel--back .ue_btn{
	display: inline-block;
}
 

	





#uc_flip_box_elementor_434c7c74 .ue-flip-box__panel--front-overlay, #uc_flip_box_elementor_434c7c74 .ue-flip-box__panel--back-overlay
{
  position:absolute;
  top:0;
  bottom:0;
  right:0;
  left:0;
  z-index:-1;
}

#uc_flip_box_elementor_434c7c74 .ue-flip-box__panel--front .ue-flip-box__icon img{
  max-width: none;
}


</style>

<div id="uc_flip_box_elementor_434c7c74" class="ue-flip-box" data-id="uc_flip_box_elementor_434c7c74" data-closeonbody='false'>
  
      <div class="ue-flip-box__container uc-hide ue-flip_left ue-flip-box__container--hover" tabindex="0">
      
    <div class="ue-flip-box__panel ue-flip-box__panel--front">
      <div class="ue-flip-box__panel--front-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                                         <div class="ue-flip-box__panel__element ue-flip-box__icon"><img decoding="async" src="/img/aws-images/Industries-we-Focus-On-flip1.png" title="" alt=""  src="/img/aws-images/Industries-we-Focus-On-flip1.png"></div>                                                      <div class="ue-flip-box__panel__element ue-flip-box__title">Casino Software<br> Solutions</div>                                                  <div class="ue-flip-box__panel__element ue-flip-box__description"><p style="text-align: left;">Read more...</p></div>        </div>
      </div>
    </div>
    

      
    <div class="ue-flip-box__panel ue-flip-box__panel--back">
      <div class="ue-flip-box__panel--back-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>Backed by years of experience &amp; a dedicated casino game development company, we ensure smooth implementation and ongoing success for businesses. Focusing on reliability, we offer a comprehensive stack of casino gaming solutions tailored for the modern gaming vertical.</p></div>                  </div>
      </div>
    </div>
    
  </div>
  
   
      
        
</div>
<!-- end Flip Box -->				</div>
				</div>
					</div>
				</div>
				</div>
		
													</div>
												<div class="premium-carousel-template item-wrapper" >
							<style>.elementor-3774 .elementor-element.elementor-element-94de22f{--display:flex;--min-height:0px;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{background-color:transparent;background-image:radial-gradient(at center center, var( --e-global-color-secondary ) 0%, #373535 80%);border-style:none;padding:0px 0px 0px 0px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{background-color:transparent;background-image:linear-gradient(180deg, var( --e-global-color-secondary ) 0%, var( --e-global-color-primary ) 100%);padding:20px 20px 20px 20px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__overlay{background-color:rgba(0, 0, 0, 0.70);transition-duration:800ms !important;opacity:100%;}.elementor-3774 .elementor-element.elementor-element-434c7c7{width:100%;max-width:100%;}.elementor-3774 .elementor-element.elementor-element-434c7c7 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;border-style:none;}.elementor-3774 .elementor-element.elementor-element-434c7c7.xpro-widget-bg-overlay:before{transition:background 0.3s;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:320px;--duration:800ms;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel{border-radius:20px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon img{width:88%;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon{background-color:#FFFFFF00;width:243px;height:243px;border-radius:0px;border-style:none;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__element{margin:0px 0px 0px 0px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:800;line-height:24px;text-shadow:0px 0px 10px rgba(0,0,0,0.3);margin-top:8px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__description{color:var( --e-global-color-secondary );font-family:"Montserrat", Sans-serif;font-size:16px;font-weight:800;margin-top:8px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger{font-size:20px;color:#303030;opacity:100%;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger svg{fill:#303030;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover{color:#303030;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover svg{fill:#303030;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon{color:#d9d9d9;background-color:#6a6a6a;width:62px;height:62px;border-radius:100px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg{fill:#d9d9d9 !important;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg path{fill:#d9d9d9 !important;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__description{color:#FFFFFF;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue_btn{padding:10px 20px 10px 20px;background-color:#bfbfbf;color:#ffffff;margin-top:20px;display:inline-block;border-radius:100px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue_btn:hover{background-color:#8d8d8d;color:#ffffff;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger{font-size:20px;color:#ececec;opacity:100%;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger svg{fill:#ececec;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover{color:#ececec;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover svg{fill:#ececec;}@media(max-width:767px){.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:360px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{padding:0px 10px 0px 10px;}.elementor-3774 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{padding:0px 10px 0px 10px;}}@media(min-width:768px){.elementor-3774 .elementor-element.elementor-element-94de22f{--content-width:350px;}}</style>		<div data-elementor-type="container" data-elementor-id="3774" class="elementor elementor-3774" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-94de22f e-flex e-con-boxed e-con e-parent" data-id="94de22f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-434c7c7 elementor-widget__width-inherit elementor-widget elementor-widget-ucaddon_flip_box" data-id="434c7c7" data-element_type="widget" data-e-type="widget" data-widget_type="ucaddon_flip_box.default">
				<div class="elementor-widget-container">
					
<!-- start Flip Box -->
		<link id='uc_ac_assets_file_ue_flipbox_styles_css_12353-css' href='/wp-content/uploads/ac_assets/uc_flip_box_base/animations/ue-flipbox-styles.css' type='text/css' rel='stylesheet' >

<style>/* widget: Flip Box */

/* elementor container support */
.e-con-inner>.elementor-widget-ucaddon_flip_box, .e-con>.elementor-widget-ucaddon_flip_box {
    width: var(--container-widget-width);
    --flex-grow: var(--container-widget-flex-grow);
}

#uc_flip_box_elementor_434c7c75 .ue-flip-box__panel.ue-flip-box__panel--front,
#uc_flip_box_elementor_434c7c75 .ue-flip-box__panel.ue-flip-box__panel--back {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden; 
}

#uc_flip_box_elementor_434c7c75 .ue-flip-box__panel__wrapper{
  pointer-events: all;
}


#uc_flip_box_elementor_434c7c75 .ue-flip-box__panel--back .ue_btn{
	display: inline-block;
}
 

	





#uc_flip_box_elementor_434c7c75 .ue-flip-box__panel--front-overlay, #uc_flip_box_elementor_434c7c75 .ue-flip-box__panel--back-overlay
{
  position:absolute;
  top:0;
  bottom:0;
  right:0;
  left:0;
  z-index:-1;
}

#uc_flip_box_elementor_434c7c75 .ue-flip-box__panel--front .ue-flip-box__icon img{
  max-width: none;
}


</style>

<div id="uc_flip_box_elementor_434c7c75" class="ue-flip-box" data-id="uc_flip_box_elementor_434c7c75" data-closeonbody='false'>
  
      <div class="ue-flip-box__container uc-hide ue-flip_left ue-flip-box__container--hover" tabindex="0">
      
    <div class="ue-flip-box__panel ue-flip-box__panel--front">
      <div class="ue-flip-box__panel--front-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                                         <div class="ue-flip-box__panel__element ue-flip-box__icon"><img decoding="async" src="/img/aws-images/Industries-we-Focus-On-flip2.png" title="" alt=""  src="/img/aws-images/Industries-we-Focus-On-flip2.png"></div>                                                      <div class="ue-flip-box__panel__element ue-flip-box__title"> iGaming Integration <br>Services</div>                                                  <div class="ue-flip-box__panel__element ue-flip-box__description"><p style="text-align: left;">Read more...</p></div>        </div>
      </div>
    </div>
    

      
    <div class="ue-flip-box__panel ue-flip-box__panel--back">
      <div class="ue-flip-box__panel--back-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>We’re your go-to for sportsbook integration. Our tailored approach caters to the unique requirements, delivering top-notch solutions, with expertise in API integration, Player management, &amp; other Integrations to ensure smooth compatibility across the entire solution. </p></div>                  </div>
      </div>
    </div>
    
  </div>
  
   
      
        
</div>
<!-- end Flip Box -->				</div>
				</div>
					</div>
				</div>
				</div>
		
													</div>
												<div class="premium-carousel-template item-wrapper" >
							<style>.elementor-3775 .elementor-element.elementor-element-94de22f{--display:flex;--min-height:0px;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{background-color:transparent;background-image:radial-gradient(at center center, var( --e-global-color-secondary ) 0%, #373535 80%);border-style:none;padding:0px 0px 0px 0px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{background-color:transparent;background-image:linear-gradient(180deg, var( --e-global-color-secondary ) 0%, var( --e-global-color-primary ) 100%);padding:20px 20px 20px 20px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__overlay{background-color:rgba(0, 0, 0, 0.70);transition-duration:800ms !important;opacity:100%;}.elementor-3775 .elementor-element.elementor-element-434c7c7{width:100%;max-width:100%;}.elementor-3775 .elementor-element.elementor-element-434c7c7 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;border-style:none;}.elementor-3775 .elementor-element.elementor-element-434c7c7.xpro-widget-bg-overlay:before{transition:background 0.3s;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:320px;--duration:800ms;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel{border-radius:20px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon img{width:88%;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon{background-color:#FFFFFF00;width:243px;height:243px;border-radius:0px;border-style:none;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__element{margin:0px 0px 0px 0px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:800;line-height:24px;text-shadow:0px 0px 10px rgba(0,0,0,0.3);margin-top:8px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__description{color:var( --e-global-color-secondary );font-family:"Montserrat", Sans-serif;font-size:16px;font-weight:800;margin-top:8px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger{font-size:20px;color:#303030;opacity:100%;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger svg{fill:#303030;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover{color:#303030;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover svg{fill:#303030;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon{color:#d9d9d9;background-color:#6a6a6a;width:62px;height:62px;border-radius:100px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg{fill:#d9d9d9 !important;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg path{fill:#d9d9d9 !important;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__description{color:#FFFFFF;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue_btn{padding:10px 20px 10px 20px;background-color:#bfbfbf;color:#ffffff;margin-top:20px;display:inline-block;border-radius:100px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue_btn:hover{background-color:#8d8d8d;color:#ffffff;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger{font-size:20px;color:#ececec;opacity:100%;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger svg{fill:#ececec;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover{color:#ececec;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover svg{fill:#ececec;}@media(max-width:767px){.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:360px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{padding:0px 10px 0px 10px;}.elementor-3775 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{padding:0px 10px 0px 10px;}}@media(min-width:768px){.elementor-3775 .elementor-element.elementor-element-94de22f{--content-width:350px;}}</style>		<div data-elementor-type="container" data-elementor-id="3775" class="elementor elementor-3775" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-94de22f e-flex e-con-boxed e-con e-parent" data-id="94de22f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-434c7c7 elementor-widget__width-inherit elementor-widget elementor-widget-ucaddon_flip_box" data-id="434c7c7" data-element_type="widget" data-e-type="widget" data-widget_type="ucaddon_flip_box.default">
				<div class="elementor-widget-container">
					
<!-- start Flip Box -->
		<link id='uc_ac_assets_file_ue_flipbox_styles_css_12353-css' href='/wp-content/uploads/ac_assets/uc_flip_box_base/animations/ue-flipbox-styles.css' type='text/css' rel='stylesheet' >

<style>/* widget: Flip Box */

/* elementor container support */
.e-con-inner>.elementor-widget-ucaddon_flip_box, .e-con>.elementor-widget-ucaddon_flip_box {
    width: var(--container-widget-width);
    --flex-grow: var(--container-widget-flex-grow);
}

#uc_flip_box_elementor_434c7c76 .ue-flip-box__panel.ue-flip-box__panel--front,
#uc_flip_box_elementor_434c7c76 .ue-flip-box__panel.ue-flip-box__panel--back {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden; 
}

#uc_flip_box_elementor_434c7c76 .ue-flip-box__panel__wrapper{
  pointer-events: all;
}


#uc_flip_box_elementor_434c7c76 .ue-flip-box__panel--back .ue_btn{
	display: inline-block;
}
 

	





#uc_flip_box_elementor_434c7c76 .ue-flip-box__panel--front-overlay, #uc_flip_box_elementor_434c7c76 .ue-flip-box__panel--back-overlay
{
  position:absolute;
  top:0;
  bottom:0;
  right:0;
  left:0;
  z-index:-1;
}

#uc_flip_box_elementor_434c7c76 .ue-flip-box__panel--front .ue-flip-box__icon img{
  max-width: none;
}


</style>

<div id="uc_flip_box_elementor_434c7c76" class="ue-flip-box" data-id="uc_flip_box_elementor_434c7c76" data-closeonbody='false'>
  
      <div class="ue-flip-box__container uc-hide ue-flip_left ue-flip-box__container--hover" tabindex="0">
      
    <div class="ue-flip-box__panel ue-flip-box__panel--front">
      <div class="ue-flip-box__panel--front-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                                         <div class="ue-flip-box__panel__element ue-flip-box__icon"><img decoding="async" src="/img/aws-images/Industries-we-Focus-On-flip3.png" title="" alt=""  src="/img/aws-images/Industries-we-Focus-On-flip3.png"></div>                                                      <div class="ue-flip-box__panel__element ue-flip-box__title">Mobile Application<br> Development</div>                                                  <div class="ue-flip-box__panel__element ue-flip-box__description"><p style="text-align: left;">Read more...</p></div>        </div>
      </div>
    </div>
    

      
    <div class="ue-flip-box__panel ue-flip-box__panel--back">
      <div class="ue-flip-box__panel--back-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>Our team of expert app developers builds feature-rich mobile applications for sports betting, casino solutions, &amp; crash games tailored to unique requirements. We are a trusted gaming App Development company offering seamless cross-platform experiences to users.</p></div>                  </div>
      </div>
    </div>
    
  </div>
  
   
      
        
</div>
<!-- end Flip Box -->				</div>
				</div>
					</div>
				</div>
				</div>
		
													</div>
												<div class="premium-carousel-template item-wrapper" >
							<style>.elementor-3776 .elementor-element.elementor-element-94de22f{--display:flex;--min-height:0px;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{background-color:transparent;background-image:radial-gradient(at center center, var( --e-global-color-secondary ) 0%, #373535 80%);border-style:none;padding:0px 0px 0px 0px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{background-color:transparent;background-image:linear-gradient(180deg, var( --e-global-color-secondary ) 0%, var( --e-global-color-primary ) 100%);padding:20px 20px 20px 20px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__overlay{background-color:rgba(0, 0, 0, 0.70);transition-duration:800ms !important;opacity:100%;}.elementor-3776 .elementor-element.elementor-element-434c7c7{width:100%;max-width:100%;}.elementor-3776 .elementor-element.elementor-element-434c7c7 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;border-style:none;}.elementor-3776 .elementor-element.elementor-element-434c7c7.xpro-widget-bg-overlay:before{transition:background 0.3s;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:320px;--duration:800ms;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel{border-radius:20px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon img{width:88%;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon{background-color:#FFFFFF00;width:243px;height:243px;border-radius:0px;border-style:none;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__element{margin:0px 0px 0px 0px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:800;line-height:24px;text-shadow:0px 0px 10px rgba(0,0,0,0.3);margin-top:8px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__description{color:var( --e-global-color-secondary );font-family:"Montserrat", Sans-serif;font-size:16px;font-weight:800;margin-top:8px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger{font-size:20px;color:#303030;opacity:100%;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger svg{fill:#303030;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover{color:#303030;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover svg{fill:#303030;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon{color:#d9d9d9;background-color:#6a6a6a;width:62px;height:62px;border-radius:100px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg{fill:#d9d9d9 !important;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg path{fill:#d9d9d9 !important;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__description{color:#FFFFFF;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue_btn{padding:10px 20px 10px 20px;background-color:#bfbfbf;color:#ffffff;margin-top:20px;display:inline-block;border-radius:100px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue_btn:hover{background-color:#8d8d8d;color:#ffffff;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger{font-size:20px;color:#ececec;opacity:100%;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger svg{fill:#ececec;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover{color:#ececec;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover svg{fill:#ececec;}@media(max-width:767px){.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:360px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{padding:0px 10px 0px 10px;}.elementor-3776 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{padding:0px 10px 0px 10px;}}@media(min-width:768px){.elementor-3776 .elementor-element.elementor-element-94de22f{--content-width:350px;}}</style>		<div data-elementor-type="container" data-elementor-id="3776" class="elementor elementor-3776" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-94de22f e-flex e-con-boxed e-con e-parent" data-id="94de22f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-434c7c7 elementor-widget__width-inherit elementor-widget elementor-widget-ucaddon_flip_box" data-id="434c7c7" data-element_type="widget" data-e-type="widget" data-widget_type="ucaddon_flip_box.default">
				<div class="elementor-widget-container">
					
<!-- start Flip Box -->
		<link id='uc_ac_assets_file_ue_flipbox_styles_css_12353-css' href='/wp-content/uploads/ac_assets/uc_flip_box_base/animations/ue-flipbox-styles.css' type='text/css' rel='stylesheet' >

<style>/* widget: Flip Box */

/* elementor container support */
.e-con-inner>.elementor-widget-ucaddon_flip_box, .e-con>.elementor-widget-ucaddon_flip_box {
    width: var(--container-widget-width);
    --flex-grow: var(--container-widget-flex-grow);
}

#uc_flip_box_elementor_434c7c77 .ue-flip-box__panel.ue-flip-box__panel--front,
#uc_flip_box_elementor_434c7c77 .ue-flip-box__panel.ue-flip-box__panel--back {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden; 
}

#uc_flip_box_elementor_434c7c77 .ue-flip-box__panel__wrapper{
  pointer-events: all;
}


#uc_flip_box_elementor_434c7c77 .ue-flip-box__panel--back .ue_btn{
	display: inline-block;
}
 

	





#uc_flip_box_elementor_434c7c77 .ue-flip-box__panel--front-overlay, #uc_flip_box_elementor_434c7c77 .ue-flip-box__panel--back-overlay
{
  position:absolute;
  top:0;
  bottom:0;
  right:0;
  left:0;
  z-index:-1;
}

#uc_flip_box_elementor_434c7c77 .ue-flip-box__panel--front .ue-flip-box__icon img{
  max-width: none;
}


</style>

<div id="uc_flip_box_elementor_434c7c77" class="ue-flip-box" data-id="uc_flip_box_elementor_434c7c77" data-closeonbody='false'>
  
      <div class="ue-flip-box__container uc-hide ue-flip_left ue-flip-box__container--hover" tabindex="0">
      
    <div class="ue-flip-box__panel ue-flip-box__panel--front">
      <div class="ue-flip-box__panel--front-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                                         <div class="ue-flip-box__panel__element ue-flip-box__icon"><img decoding="async" src="/img/aws-images/Industries-we-Focus-On-flip4.png" title="" alt=""  src="/img/aws-images/Industries-we-Focus-On-flip4.png"></div>                                                      <div class="ue-flip-box__panel__element ue-flip-box__title">Social Gaming <br>Development</div>                                                  <div class="ue-flip-box__panel__element ue-flip-box__description"><p style="text-align: left;">Read more...</p></div>        </div>
      </div>
    </div>
    

      
    <div class="ue-flip-box__panel ue-flip-box__panel--back">
      <div class="ue-flip-box__panel--back-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>We create captivating gaming solutions that foster community engagement &amp; interaction through Social Gaming Development. It ensures seamless integration with social media platforms, allowing players to easily connect with friends &amp; share their gaming experiences.</p></div>                  </div>
      </div>
    </div>
    
  </div>
  
   
      
        
</div>
<!-- end Flip Box -->				</div>
				</div>
					</div>
				</div>
				</div>
		
													</div>
												<div class="premium-carousel-template item-wrapper" >
							<style>.elementor-3777 .elementor-element.elementor-element-94de22f{--display:flex;--min-height:0px;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{background-color:transparent;background-image:radial-gradient(at center center, var( --e-global-color-secondary ) 0%, #373535 80%);border-style:none;padding:0px 0px 0px 0px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{background-color:transparent;background-image:linear-gradient(180deg, var( --e-global-color-secondary ) 0%, var( --e-global-color-primary ) 100%);padding:20px 20px 20px 20px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__overlay{background-color:rgba(0, 0, 0, 0.70);transition-duration:800ms !important;opacity:100%;}.elementor-3777 .elementor-element.elementor-element-434c7c7{width:100%;max-width:100%;}.elementor-3777 .elementor-element.elementor-element-434c7c7 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;border-style:none;}.elementor-3777 .elementor-element.elementor-element-434c7c7.xpro-widget-bg-overlay:before{transition:background 0.3s;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:320px;--duration:800ms;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel{border-radius:20px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon img{width:88%;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__icon{background-color:#FFFFFF00;width:243px;height:243px;border-radius:0px;border-style:none;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__panel__element{margin:0px 0px 0px 0px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:800;line-height:24px;text-shadow:0px 0px 10px rgba(0,0,0,0.3);margin-top:8px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front .ue-flip-box__description{color:var( --e-global-color-secondary );font-family:"Montserrat", Sans-serif;font-size:16px;font-weight:800;margin-top:8px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger{font-size:20px;color:#303030;opacity:100%;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger svg{fill:#303030;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover{color:#303030;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__front-trigger:hover svg{fill:#303030;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__panel__content{align-items:center;justify-content:center;text-align:center;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon{color:#d9d9d9;background-color:#6a6a6a;width:62px;height:62px;border-radius:100px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg{fill:#d9d9d9 !important;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__icon svg path{fill:#d9d9d9 !important;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__title{color:#ffffff;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back .ue-flip-box__description{color:#FFFFFF;font-family:"Montserrat", Sans-serif;font-weight:400;margin-top:10px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue_btn{padding:10px 20px 10px 20px;background-color:#bfbfbf;color:#ffffff;margin-top:20px;display:inline-block;border-radius:100px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue_btn:hover{background-color:#8d8d8d;color:#ffffff;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger{font-size:20px;color:#ececec;opacity:100%;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger svg{fill:#ececec;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover{color:#ececec;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__back-trigger:hover svg{fill:#ececec;}@media(max-width:767px){.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box{height:360px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--front{padding:0px 10px 0px 10px;}.elementor-3777 .elementor-element.elementor-element-434c7c7 .ue-flip-box__panel--back{padding:0px 10px 0px 10px;}}@media(min-width:768px){.elementor-3777 .elementor-element.elementor-element-94de22f{--content-width:350px;}}</style>		<div data-elementor-type="container" data-elementor-id="3777" class="elementor elementor-3777" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-94de22f e-flex e-con-boxed e-con e-parent" data-id="94de22f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-434c7c7 elementor-widget__width-inherit elementor-widget elementor-widget-ucaddon_flip_box" data-id="434c7c7" data-element_type="widget" data-e-type="widget" data-widget_type="ucaddon_flip_box.default">
				<div class="elementor-widget-container">
					
<!-- start Flip Box -->
		<link id='uc_ac_assets_file_ue_flipbox_styles_css_12353-css' href='/wp-content/uploads/ac_assets/uc_flip_box_base/animations/ue-flipbox-styles.css' type='text/css' rel='stylesheet' >

<style>/* widget: Flip Box */

/* elementor container support */
.e-con-inner>.elementor-widget-ucaddon_flip_box, .e-con>.elementor-widget-ucaddon_flip_box {
    width: var(--container-widget-width);
    --flex-grow: var(--container-widget-flex-grow);
}

#uc_flip_box_elementor_434c7c78 .ue-flip-box__panel.ue-flip-box__panel--front,
#uc_flip_box_elementor_434c7c78 .ue-flip-box__panel.ue-flip-box__panel--back {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden; 
}

#uc_flip_box_elementor_434c7c78 .ue-flip-box__panel__wrapper{
  pointer-events: all;
}


#uc_flip_box_elementor_434c7c78 .ue-flip-box__panel--back .ue_btn{
	display: inline-block;
}
 

	





#uc_flip_box_elementor_434c7c78 .ue-flip-box__panel--front-overlay, #uc_flip_box_elementor_434c7c78 .ue-flip-box__panel--back-overlay
{
  position:absolute;
  top:0;
  bottom:0;
  right:0;
  left:0;
  z-index:-1;
}

#uc_flip_box_elementor_434c7c78 .ue-flip-box__panel--front .ue-flip-box__icon img{
  max-width: none;
}


</style>

<div id="uc_flip_box_elementor_434c7c78" class="ue-flip-box" data-id="uc_flip_box_elementor_434c7c78" data-closeonbody='false'>
  
      <div class="ue-flip-box__container uc-hide ue-flip_left ue-flip-box__container--hover" tabindex="0">
      
    <div class="ue-flip-box__panel ue-flip-box__panel--front">
      <div class="ue-flip-box__panel--front-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                                         <div class="ue-flip-box__panel__element ue-flip-box__icon"><img decoding="async" src="/img/aws-images/Industries-we-Focus-On-flip5.png" title="" alt=""  src="/img/aws-images/Industries-we-Focus-On-flip5.png"></div>                                                      <div class="ue-flip-box__panel__element ue-flip-box__title">eSports Platform <br>Development</div>                                                  <div class="ue-flip-box__panel__element ue-flip-box__description"><p style="text-align: left;">Read more</p></div>        </div>
      </div>
    </div>
    

      
    <div class="ue-flip-box__panel ue-flip-box__panel--back">
      <div class="ue-flip-box__panel--back-overlay"></div>
            <div class="ue-flip-box__panel__wrapper">
        <div class="ue-flip-box__panel__content">
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>From eSports Platform development to customization, our gaming experts design dynamic platforms that empower organizers and players alike. Our understanding of eSports culture enables us to integrate gamification elements that foster community interaction more easily.</p></div>                  </div>
      </div>
    </div>
    
  </div>
  
   
      
        
</div>
<!-- end Flip Box -->				</div>
				</div>
					</div>
				</div>
				</div>
		
													</div>
									</div>

			
			
					</div>
						</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-87bddc2 e-flex e-con-boxed e-con e-parent" data-id="87bddc2" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-a5f540a elementor-widget-laptop__width-initial elementor-widget-tablet_extra__width-initial textoDegradado elementor-widget elementor-widget-heading" data-id="a5f540a" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">WHY<span> WE ARE THE LEADERS</span> IN<br> iGAMING SOFTWARE DEVELOPMENT?</h3>				</div>
				</div>
		<div class="elementor-element elementor-element-ee677e2 e-con-full e-flex e-con e-child" data-id="ee677e2" data-element_type="container" data-e-type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
		<div class="elementor-element elementor-element-5ee2ba0 e-con-full leaders-inner animated-slow e-transform e-flex e-con e-child" data-id="5ee2ba0" data-element_type="container" data-e-type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;_transform_rotateZ_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_hover_laptop&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_hover_tablet_extra&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
				<div class="elementor-element elementor-element-a4446f0 elementor-widget elementor-widget-image" data-id="a4446f0" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" src="/img/aws-images/003-ajuste.svg" title="" alt="" loading="lazy" />															</div>
				</div>
				<div class="elementor-element elementor-element-165e62c elementor-widget elementor-widget-heading" data-id="165e62c" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Custom Software
Development</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-125bffa elementor-widget elementor-widget-text-editor" data-id="125bffa" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Our custom software development services are designed to address unique business needs, driving innovation, enabling scalability, and giving businesses a competitive edge in today’s fast-evolving digital landscape.</p>								</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-ff929fc e-con-full leaders-inner e-flex e-con e-child" data-id="ff929fc" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-e1cc989 elementor-widget elementor-widget-image" data-id="e1cc989" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" src="/img/aws-images/001-monedas.svg" title="" alt="" loading="lazy" />															</div>
				</div>
				<div class="elementor-element elementor-element-b6df703 elementor-widget elementor-widget-heading" data-id="b6df703" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Multi-currency<br> support
</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-e53ce5a elementor-widget elementor-widget-text-editor" data-id="e53ce5a" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>BSL Gaming provides robust multi-currency support in iGaming software development to ensure seamless and secure transactions for players worldwide, enhancing accessibility, user trust, and overall experience across diverse global markets.</p>								</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-1ed35ef e-con-full leaders-inner e-flex e-con e-child" data-id="1ed35ef" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-ab2a24d elementor-widget elementor-widget-image" data-id="ab2a24d" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" src="/img/aws-images/002-actualizar-flecha.svg" title="" alt="" loading="lazy" />															</div>
				</div>
				<div class="elementor-element elementor-element-3a2c204 elementor-widget elementor-widget-heading" data-id="3a2c204" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Regular<br> Automated Game
</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-c7fe25f elementor-widget elementor-widget-text-editor" data-id="c7fe25f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>We strive to provide Regular automated game updates in  iGaming platforms &amp; Casino Solutions to guarantee fresh content, keeping players engaged and satisfied while reflecting the platform’s commitment to continuous improvement.</p>								</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-d26c697 e-con-full leaders-inner e-flex e-con e-child" data-id="d26c697" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-9db3925 elementor-widget elementor-widget-image" data-id="9db3925" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" src="/img/aws-images/004-disposicion.svg" title="" alt="" loading="lazy" />															</div>
				</div>
				<div class="elementor-element elementor-element-0ec6b62 elementor-widget elementor-widget-heading" data-id="0ec6b62" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Better<br> User Experience
</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-7016f2e elementor-widget elementor-widget-text-editor" data-id="7016f2e" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>In iGaming software development, user experience for bets involves intuitive interfaces, seamless navigation, and responsive design to ensure effortless and enjoyable betting. We offer personalized recommendations and real-time updates in our iGaming platforms to enhance overall user experience.</p>								</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-b0cca3e e-con-full leaders-inner e-flex e-con e-child" data-id="b0cca3e" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-67bf625 elementor-widget elementor-widget-image" data-id="67bf625" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" src="/img/aws-images/005-castillo.svg" title="" alt="" loading="lazy" />															</div>
				</div>
				<div class="elementor-element elementor-element-1ba8190 elementor-widget elementor-widget-heading" data-id="1ba8190" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Best <br>Architecture</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-49c5c2f elementor-widget elementor-widget-text-editor" data-id="49c5c2f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>We build robust, scalable architecture for seamless gameplay, enhanced user experience, and reliable system performance. Our iGaming solutions drive long-term success with custom game engines, real-time analytics, and tailored features precisely aligned with your business goals.</p>								</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-152e2a4 e-con-full leaders-inner e-flex e-con e-child" data-id="152e2a4" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-db757d7 elementor-widget elementor-widget-image" data-id="db757d7" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" src="/img/aws-images/006-corona.svg" title="" alt="" loading="lazy" />															</div>
				</div>
				<div class="elementor-element elementor-element-4c1a2c6 elementor-widget elementor-widget-heading" data-id="4c1a2c6" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Our<br> IT expertise</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-97c6156 elementor-widget elementor-widget-text-editor" data-id="97c6156" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>As a pioneer in the IT industry, we deliver iGaming solutions that are feature-rich, highly functional, and scalable. Players enjoy an engaging, uninterrupted experience that boosts retention. Our platforms enable operators to quickly adapt to market trends and maintain high performance across all devices.</p>								</div>
				</div>
				</div>
				</div>
					</div>
				</div>
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
								<div class="swiper-slide">
						<div class="swiper-slide-inner">
							<div class="elementskit-testimonial_card" style="background-image: url();" >
																	<ul class="elementskit-stars">
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																			</ul>
								
																	<p class="elementskit-commentor-coment">BSL Gaming delivered a meticulously crafted custom sportsbook platform tailored to our operations. The system runs smoothly during high traffic events and has significantly improved our betting performance.</p>
								
								<span class="elementskit-profile-info">
									<strong class="elementskit-author-name">Sattam Consulting Limited</strong>
									<span class="elementskit-author-des"></span>
								</span>
								<div class="xs-overlay elementor-repeater-item-6d78a37"></div>
							</div><!-- .testimonial_card END -->
						</div>
					</div>
								<div class="swiper-slide">
						<div class="swiper-slide-inner">
							<div class="elementskit-testimonial_card" style="background-image: url();" >
																	<ul class="elementskit-stars">
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																			</ul>
								
																	<p class="elementskit-commentor-coment">BSL Gaming delivered a precision-built sportsbook platform with advanced casino integration and powerful AI-driven insights, creating a seamless and highly efficient betting ecosystem.</p>
								
								<span class="elementskit-profile-info">
									<strong class="elementskit-author-name">Betworks Consulting</strong>
									<span class="elementskit-author-des"></span>
								</span>
								<div class="xs-overlay elementor-repeater-item-8f4d42e"></div>
							</div><!-- .testimonial_card END -->
						</div>
					</div>
								<div class="swiper-slide">
						<div class="swiper-slide-inner">
							<div class="elementskit-testimonial_card" style="background-image: url();" >
																	<ul class="elementskit-stars">
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																			</ul>
								
																	<p class="elementskit-commentor-coment">We were impressed by how BSL Gaming combined AI driven analytics with a custom sportsbook infrastructure. Their solution helped us identify suspicious betting behavior early and maintain a secure and reliable platform.</p>
								
								<span class="elementskit-profile-info">
									<strong class="elementskit-author-name">Helene T</strong>
									<span class="elementskit-author-des"></span>
								</span>
								<div class="xs-overlay elementor-repeater-item-f426222"></div>
							</div><!-- .testimonial_card END -->
						</div>
					</div>
								<div class="swiper-slide">
						<div class="swiper-slide-inner">
							<div class="elementskit-testimonial_card" style="background-image: url();" >
																	<ul class="elementskit-stars">
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																			</ul>
								
																	<p class="elementskit-commentor-coment">The team at BSL Gaming integrated sportsbook and casino gaming into one unified platform with exceptional performance. Their custom development approach ensured the solution matched our operational requirements perfectly.</p>
								
								<span class="elementskit-profile-info">
									<strong class="elementskit-author-name">AHETech</strong>
									<span class="elementskit-author-des"></span>
								</span>
								<div class="xs-overlay elementor-repeater-item-125dc08"></div>
							</div><!-- .testimonial_card END -->
						</div>
					</div>
								<div class="swiper-slide">
						<div class="swiper-slide-inner">
							<div class="elementskit-testimonial_card" style="background-image: url();" >
																	<ul class="elementskit-stars">
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																			</ul>
								
																	<p class="elementskit-commentor-coment">Highly recommend company for sportsbook solutions! The range of features incorporated within the game was really commendable. Placing bets is straightforward, and customization options made it one of the best choice among the users.</p>
								
								<span class="elementskit-profile-info">
									<strong class="elementskit-author-name">Katie K</strong>
									<span class="elementskit-author-des"></span>
								</span>
								<div class="xs-overlay elementor-repeater-item-5205974"></div>
							</div><!-- .testimonial_card END -->
						</div>
					</div>
								<div class="swiper-slide">
						<div class="swiper-slide-inner">
							<div class="elementskit-testimonial_card" style="background-image: url();" >
																	<ul class="elementskit-stars">
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																			</ul>
								
																	<p class="elementskit-commentor-coment">We needed a reliable partner to build and manage our online casino and sportsbook—and they exceeded every expectation. The platform is smooth, the games are engaging, and the support is always on point.</p>
								
								<span class="elementskit-profile-info">
									<strong class="elementskit-author-name">Amina Okoye</strong>
									<span class="elementskit-author-des"></span>
								</span>
								<div class="xs-overlay elementor-repeater-item-e3d23f3"></div>
							</div><!-- .testimonial_card END -->
						</div>
					</div>
								<div class="swiper-slide">
						<div class="swiper-slide-inner">
							<div class="elementskit-testimonial_card" style="background-image: url();" >
																	<ul class="elementskit-stars">
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																			</ul>
								
																	<p class="elementskit-commentor-coment">Working with this team has been a game-changer for our business. From sportsbook solutions to casino platforms and high-performing slot games, they deliver it all with precision and professionalism.</p>
								
								<span class="elementskit-profile-info">
									<strong class="elementskit-author-name">Emily Harper</strong>
									<span class="elementskit-author-des"></span>
								</span>
								<div class="xs-overlay elementor-repeater-item-789ac5f"></div>
							</div><!-- .testimonial_card END -->
						</div>
					</div>
								<div class="swiper-slide">
						<div class="swiper-slide-inner">
							<div class="elementskit-testimonial_card" style="background-image: url();" >
																	<ul class="elementskit-stars">
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" /></svg></a></li>
																			</ul>
								
																	<p class="elementskit-commentor-coment">Instant Assist has completely transformed how we engage our users. The real-time, AI-powered commentary keeps players glued to every moment with live match updates &amp; smart player insights.</p>
								
								<span class="elementskit-profile-info">
									<strong class="elementskit-author-name">Logan Brooks</strong>
									<span class="elementskit-author-des"></span>
								</span>
								<div class="xs-overlay elementor-repeater-item-8d0f69f"></div>
							</div><!-- .testimonial_card END -->
						</div>
					</div>
								<div class="swiper-slide">
						<div class="swiper-slide-inner">
							<div class="elementskit-testimonial_card" style="background-image: url();" >
																	<ul class="elementskit-stars">
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																			</ul>
								
																	<p class="elementskit-commentor-coment">BSL Gaming built a powerful sweepstakes casino platform for us with a dual currency system and engaging gameplay features. It helped us attract a large player base quickly while maintaining a seamless user experience.</p>
								
								<span class="elementskit-profile-info">
									<strong class="elementskit-author-name">Thabo Mbeki</strong>
									<span class="elementskit-author-des"></span>
								</span>
								<div class="xs-overlay elementor-repeater-item-3383537"></div>
							</div><!-- .testimonial_card END -->
						</div>
					</div>
								<div class="swiper-slide">
						<div class="swiper-slide-inner">
							<div class="elementskit-testimonial_card" style="background-image: url();" >
																	<ul class="elementskit-stars">
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																					<li><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" /></svg></a></li>
																			</ul>
								
																	<p class="elementskit-commentor-coment">BSL Gaming delivered a highly engaging slot game portfolio for our platform with smooth gameplay, and optimized performance. Their development team clearly understands what keeps players engaged and returning.</p>
								
								<span class="elementskit-profile-info">
									<strong class="elementskit-author-name">Kwame Ndlovu</strong>
									<span class="elementskit-author-des"></span>
								</span>
								<div class="xs-overlay elementor-repeater-item-2294ad3"></div>
							</div><!-- .testimonial_card END -->
						</div>
					</div>
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
		<div class="elementor-element elementor-element-912069a e-flex e-con-boxed e-con e-parent" data-id="912069a" data-element_type="container" data-e-type="container" id="read-blogs-wagergeeks-cls" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-a1c98e3 e-con-full e-flex e-con e-child" data-id="a1c98e3" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;none&quot;}">
				<div class="elementor-element elementor-element-414ffdd4 elementor-widget elementor-widget-heading" data-id="414ffdd4" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Start With Us!</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-52dbc125 elementor-widget elementor-widget-heading" data-id="52dbc125" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Join Hands With Us To Elevate iGaming Journey Today</p>				</div>
				</div>
				<div class="elementor-element elementor-element-6be0368c elementor-widget elementor-widget-button" data-id="6be0368c" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="/contact" target="_blank" rel="nofollow">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<i aria-hidden="true" class="fas fa-comment-dots"></i>			</span>
									<span class="elementor-button-text">Talk To Our Experts</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-a0f1632 e-flex e-con-boxed e-con e-parent" data-id="a0f1632" data-element_type="container" data-e-type="container" id="read-blog-ours" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-d01e5f9 textoDegradado elementor-widget elementor-widget-heading" data-id="d01e5f9" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Read our <span>blogs</span></h3>				</div>
				</div>
				<div class="elementor-element elementor-element-97d4a7c elementor-widget__width-inherit our-blog-read elementor-widget-tablet__width-initial elementor-widget-laptop__width-inherit elementor-widget elementor-widget-elementskit-blog-posts" data-id="97d4a7c" data-element_type="widget" data-e-type="widget" id="our-blog-post" data-widget_type="elementskit-blog-posts.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" >        <div id="post-items--97d4a7c" class="row post-items">
                    <div class="col-lg-4 col-md-6">

                                    <div class="elementskit-post-image-card">
                        <div class="elementskit-entry-header">
                                                            <a href="/blog/risk-management-in-sportsbook" class="elementskit-entry-thumb">
                                    <img post-id="17777" fifu-featured="1" decoding="async" src="/img/aws-images/WhatsApp-Image-2025-05-16-at-11.19.18-PM-1.jpeg" alt="The Ultimate Guide to Risk Management in Sportsbook: Hidden Risks &#038; Management Strategies" title="The Ultimate Guide to Risk Management in Sportsbook: Hidden Risks &#038; Management Strategies">
                                </a><!-- .elementskit-entry-thumb END -->
                                                            
                            
													</div><!-- .elementskit-entry-header END -->

						<div class="elementskit-post-body ">
																				<h2 class="entry-title">
					<a href="/blog/risk-management-in-sportsbook">
						The Ultimate Guide to Risk Management in Sportsbook: Hidden Risks &#038; Management Strategies					</a>
				</h2>
											
																												<div class="post-meta-list">
																																<span class="meta-date">
										<i aria-hidden="true" class="far fa-calendar-alt"></i>										<span class="meta-date-text">
											May 17, 2025										</span>
									</span>
																																					</div>
													
								
																																							<p>In the exciting and ever-evolving world of online sports betting,&hellip;</p>
																						                                                    </div><!-- .elementskit-post-body END -->
                    </div>
                
            </div>
                    <div class="col-lg-4 col-md-6">

                                    <div class="elementskit-post-image-card">
                        <div class="elementskit-entry-header">
                                                            <a href="/blog/ai-powered-chatbot-for-igaming" class="elementskit-entry-thumb">
                                    <img post-id="17204" fifu-featured="1" decoding="async" src="/img/aws-images/6534541-1.jpg" alt="AI Powered Chatbot Support System: How It Is Reshaping the iGaming Landscape?" title="AI Powered Chatbot Support System: How It Is Reshaping the iGaming Landscape?">
                                </a><!-- .elementskit-entry-thumb END -->
                                                            
                            
													</div><!-- .elementskit-entry-header END -->

						<div class="elementskit-post-body ">
																				<h2 class="entry-title">
					<a href="/blog/ai-powered-chatbot-for-igaming">
						AI Powered Chatbot Support System: How It Is Reshaping the iGaming Landscape?					</a>
				</h2>
											
																												<div class="post-meta-list">
																																<span class="meta-date">
										<i aria-hidden="true" class="far fa-calendar-alt"></i>										<span class="meta-date-text">
											March 21, 2025										</span>
									</span>
																																					</div>
													
								
																																							<p>Introducing Instant Assist: AI Powered Chatbot Support System In today&#8217;s&hellip;</p>
																						                                                    </div><!-- .elementskit-post-body END -->
                    </div>
                
            </div>
                    <div class="col-lg-4 col-md-6">

                                    <div class="elementskit-post-image-card">
                        <div class="elementskit-entry-header">
                                                            <a href="/blog/guide-to-start-igaming-business" class="elementskit-entry-thumb">
                                    <img post-id="16303" fifu-featured="1" decoding="async" src="/img/aws-images/3d-rendering-futuristic-technologies-3.jpg" alt="igaming software development provider" title="igaming software development provider">
                                </a><!-- .elementskit-entry-thumb END -->
                                                            
                            
													</div><!-- .elementskit-entry-header END -->

						<div class="elementskit-post-body ">
																				<h2 class="entry-title">
					<a href="/blog/guide-to-start-igaming-business">
						Build a Profitable Online iGaming Business: Step-By-Step Guide					</a>
				</h2>
											
																												<div class="post-meta-list">
																																<span class="meta-date">
										<i aria-hidden="true" class="far fa-calendar-alt"></i>										<span class="meta-date-text">
											January 31, 2025										</span>
									</span>
																																					</div>
													
								
																																							<p>The global iGaming industry is booming, offering massive opportunities for&hellip;</p>
																						                                                    </div><!-- .elementskit-post-body END -->
                    </div>
                
            </div>
                    <div class="col-lg-4 col-md-6">

                                    <div class="elementskit-post-image-card">
                        <div class="elementskit-entry-header">
                                                            <a href="/blog/igaming-software-development-features" class="elementskit-entry-thumb">
                                    <img post-id="10071" fifu-featured="1" decoding="async" src="/img/aws-images/iGaming-Software-Development-Features-1.jpg" alt="iGaming Software Development Features Every Business Must Have" title="iGaming Software Development Features Every Business Must Have">
                                </a><!-- .elementskit-entry-thumb END -->
                                                            
                            
													</div><!-- .elementskit-entry-header END -->

						<div class="elementskit-post-body ">
																				<h2 class="entry-title">
					<a href="/blog/igaming-software-development-features">
						iGaming Software Development Features Every Business Must Have					</a>
				</h2>
											
																												<div class="post-meta-list">
																																<span class="meta-date">
										<i aria-hidden="true" class="far fa-calendar-alt"></i>										<span class="meta-date-text">
											November 1, 2024										</span>
									</span>
																																					</div>
													
								
																																							<p>What is iGaming Software Development? iGaming software development develops high-class&hellip;</p>
																						                                                    </div><!-- .elementskit-post-body END -->
                    </div>
                
            </div>
                    <div class="col-lg-4 col-md-6">

                                    <div class="elementskit-post-image-card">
                        <div class="elementskit-entry-header">
                                                            <a href="/blog/ar-in-casino-software-development" class="elementskit-entry-thumb">
                                    <img post-id="8987" fifu-featured="1" decoding="async" src="/img/aws-images/banner-blog3-1.jpg" alt="The Use of Augmented Reality in Online Casino Software Development" title="The Use of Augmented Reality in Online Casino Software Development">
                                </a><!-- .elementskit-entry-thumb END -->
                                                            
                            
													</div><!-- .elementskit-entry-header END -->

						<div class="elementskit-post-body ">
																				<h2 class="entry-title">
					<a href="/blog/ar-in-casino-software-development">
						The Use of Augmented Reality in Online Casino Software Development					</a>
				</h2>
											
																												<div class="post-meta-list">
																																<span class="meta-date">
										<i aria-hidden="true" class="far fa-calendar-alt"></i>										<span class="meta-date-text">
											October 28, 2024										</span>
									</span>
																																					</div>
													
								
																																							<p>The online gaming industry has experienced exponential growth over recent&hellip;</p>
																						                                                    </div><!-- .elementskit-post-body END -->
                    </div>
                
            </div>
                </div>
       </div>				</div>
				</div>
				<div class="elementor-element elementor-element-383d70f elementor-align-center blog-button elementor-widget elementor-widget-button" data-id="383d70f" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="/blogs" target="_blank">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Read Articles</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-49022775 elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile e-flex e-con-boxed e-con e-parent" data-id="49022775" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-2f85d8fc textoDegradado elementor-widget elementor-widget-heading" data-id="2f85d8fc" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Read our <span>blogs</span></h3>				</div>
				</div>
				<div class="elementor-element elementor-element-8bec697 post-grid jltma-navigation-type-arrows jltma-carousel-style-carousel elementor-widget elementor-widget-ma-blog-post" data-id="8bec697" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;ma_el_post_grid_layout&quot;:&quot;grid&quot;,&quot;autoheight&quot;:&quot;yes&quot;,&quot;item_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;item_gap_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;item_gap_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;item_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;item_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]}}" data-widget_type="ma-blog-post.default">
				<div class="elementor-widget-container">
					
											<div class="jltma-blog">

							

							<div class="jltma-blog-wrapper jltma-blog-grid jltma-row">

								
						<div class="jltma-post-outer-container jltma-col-4">
				

				<div class="jltma-blog-post jltma-default-post                classic">

					
							
								
									
										
											<div class="elementor-animation-grow">
							<div
								class="jltma-post-thumbnail jltma-img-shine jltma-img-shape-none">
								<a href="/blog/igaming-software-features-tunisia" target="_self">
									<img fetchpriority="high" decoding="async" width="1672" height="941" src="/wp-content/uploads/2026/07/ChatGPT-Image-Jul-3-2026-01_14_43-AM.png" class="attachment-full size-full wp-post-image" alt="Top 10 iGaming Software Development Features Tunisian Operators Need" title="Top 10 iGaming Software Development Features Tunisian Operators Need" srcset="https://www.wagergeeks.com/wp-content/uploads/2026/07/ChatGPT-Image-Jul-3-2026-01_14_43-AM.png 1672w, https://www.wagergeeks.com/wp-content/uploads/2026/07/ChatGPT-Image-Jul-3-2026-01_14_43-AM-300x169.png 300w, https://www.wagergeeks.com/wp-content/uploads/2026/07/ChatGPT-Image-Jul-3-2026-01_14_43-AM-1024x576.png 1024w, https://www.wagergeeks.com/wp-content/uploads/2026/07/ChatGPT-Image-Jul-3-2026-01_14_43-AM-768x432.png 768w, https://www.wagergeeks.com/wp-content/uploads/2026/07/ChatGPT-Image-Jul-3-2026-01_14_43-AM-1536x864.png 1536w" sizes="(max-width: 1672px) 100vw, 1672px" />								</a>
															</div>
						</div>
					
				
										<div
											class="jltma-blog-effect-container jltma-blog-shine-effect">
											<a class="jltma-post-link" href="/blog/igaming-software-features-tunisia" target="_self"></a>
																					</div>



										
									
									


									
										
											
												<div class="jltma-post-content ">

													<div class="jltma-blog-inner-container">

														
														<div class="jltma-blog-entry-container">
															
			<h2 class="jltma-entry-title">
				<a href="/blog/igaming-software-features-tunisia" target="_self">Top 10 iGaming Software Development Features Tunisian Operators Need</a>
			</h2>

		
			<div class="jltma-post-entry-meta" style="margin-left:0px">

				
									<span class="jltma-post-date">
													<i class="fa fa-calendar fa-fw"></i>
						
													<a href="/blog/igaming-software-features-tunisia" target="_self">July 2, 2026</a>
											</span>
				
				
				
			</div>

																	</div>
													</div>


													
															<div class="jltma-blog-post-content-wrap" style="margin-left:0px;">
			<p>Top iGaming software features Tunisian operators are focusing on …</p>		</div>
		
																									</div>


												
											

									

						</div>
					</div>

				
						<div class="jltma-post-outer-container jltma-col-4">
				

				<div class="jltma-blog-post jltma-default-post                classic">

					
							
								
									
										
											<div class="elementor-animation-grow elementor-animation-grow">
							<div
								class="jltma-post-thumbnail jltma-img-shine jltma-img-shape-none">
								<a href="/blog/casino-software-development-features-ghana" target="_self">
									<img decoding="async" width="1672" height="941" src="/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_58_35-AM.png" class="attachment-full size-full wp-post-image" alt="Top 10 Casino Software Development Features for Ghana Operators" title="Top 10 Casino Software Development Features for Ghana Operators" srcset="https://www.wagergeeks.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_58_35-AM.png 1672w, https://www.wagergeeks.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_58_35-AM-300x169.png 300w, https://www.wagergeeks.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_58_35-AM-1024x576.png 1024w, https://www.wagergeeks.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_58_35-AM-768x432.png 768w, https://www.wagergeeks.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_58_35-AM-1536x864.png 1536w" sizes="(max-width: 1672px) 100vw, 1672px" />								</a>
															</div>
						</div>
					
				
										<div
											class="jltma-blog-effect-container jltma-blog-shine-effect">
											<a class="jltma-post-link" href="/blog/casino-software-development-features-ghana" target="_self"></a>
																					</div>



										
									
									


									
										
											
												<div class="jltma-post-content ">

													<div class="jltma-blog-inner-container">

														
														<div class="jltma-blog-entry-container">
															
			<h2 class="jltma-entry-title jltma-entry-title">
				<a href="/blog/casino-software-development-features-ghana" target="_self">Top 10 Casino Software Development Features for Ghana Operators</a>
			</h2>

		
			<div class="jltma-post-entry-meta" style="margin-left:0px">

				
									<span class="jltma-post-date">
													<i class="fa fa-calendar fa-fw"></i>
						
													<a href="/blog/casino-software-development-features-ghana" target="_self">June 22, 2026</a>
											</span>
				
				
				
			</div>

																	</div>
													</div>


													
															<div class="jltma-blog-post-content-wrap" style="margin-left:0px;">
			<p>The right Casino Software Development Features for Ghana operators …</p>		</div>
		
																									</div>


												
											

									

						</div>
					</div>

				
						<div class="jltma-post-outer-container jltma-col-4">
				

				<div class="jltma-blog-post jltma-default-post                classic">

					
							
								
									
										
											<div class="elementor-animation-grow elementor-animation-grow elementor-animation-grow">
							<div
								class="jltma-post-thumbnail jltma-img-shine jltma-img-shape-none">
								<a href="/blog/casino-game-development-cost-in-ghana" target="_self">
									<img decoding="async" width="1672" height="941" src="/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_29_05-AM.png" class="attachment-full size-full wp-post-image" alt="Casino Game Development Cost for Ghana Operators: Features, Pricing &#038; Solutions " title="Casino Game Development Cost for Ghana Operators: Features, Pricing &#038; Solutions " srcset="https://www.wagergeeks.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_29_05-AM.png 1672w, https://www.wagergeeks.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_29_05-AM-300x169.png 300w, https://www.wagergeeks.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_29_05-AM-1024x576.png 1024w, https://www.wagergeeks.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_29_05-AM-768x432.png 768w, https://www.wagergeeks.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-01_29_05-AM-1536x864.png 1536w" sizes="(max-width: 1672px) 100vw, 1672px" />								</a>
															</div>
						</div>
					
				
										<div
											class="jltma-blog-effect-container jltma-blog-shine-effect">
											<a class="jltma-post-link" href="/blog/casino-game-development-cost-in-ghana" target="_self"></a>
																					</div>



										
									
									


									
										
											
												<div class="jltma-post-content ">

													<div class="jltma-blog-inner-container">

														
														<div class="jltma-blog-entry-container">
															
			<h2 class="jltma-entry-title jltma-entry-title jltma-entry-title">
				<a href="/blog/casino-game-development-cost-in-ghana" target="_self">Casino Game Development Cost for Ghana Operators: Features, Pricing &#038; Solutions </a>
			</h2>

		
			<div class="jltma-post-entry-meta" style="margin-left:0px">

				
									<span class="jltma-post-date">
													<i class="fa fa-calendar fa-fw"></i>
						
													<a href="/blog/casino-game-development-cost-in-ghana" target="_self">June 22, 2026</a>
											</span>
				
				
				
			</div>

																	</div>
													</div>


													
															<div class="jltma-blog-post-content-wrap" style="margin-left:0px;">
			<p>Casino game development cost in Ghana generally ranges between $20,000 …</p>		</div>
		
																									</div>


												
											

									

						</div>
					</div>

				
							</div>

							
					</div>


									</div>
				</div>
				<div class="elementor-element elementor-element-ffa1c2c elementor-align-center elementor-widget elementor-widget-button" data-id="ffa1c2c" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="/blogs" target="_blank">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Read Articles</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
				</div>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-ff705b faqs-section elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ff705b" data-element_type="section" data-e-type="section" id="xs_cta_style_2" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-363fabc9" data-id="363fabc9" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-370fd4c elementor-widget elementor-widget-elementskit-heading" data-id="370fd4c" data-element_type="widget" data-e-type="widget" data-widget_type="elementskit-heading.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" ><div class="ekit-heading elementskit-section-title-wraper center   ekit_heading_tablet-   ekit_heading_mobile-"><h3 class="ekit-heading--title elementskit-section-title ">FAQS</h3><div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider ekit-dotted"><div class="elementskit-border-divider ekit-dotted"></div></div><h3 class="ekit-heading--subtitle elementskit-section-subtitle  ">
						Everything You Need to Know About iGaming Platform Development
					</h3></div></div>				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-133ce4b5" data-id="133ce4b5" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a10212b elementor-widget__width-initial wagergeeks-faq-section elementor-widget elementor-widget-ma-advanced-accordion" data-id="a10212b" data-element_type="widget" data-e-type="widget" data-settings="{&quot;accordion_type&quot;:&quot;accordion&quot;,&quot;toggle_speed&quot;:300}" data-widget_type="ma-advanced-accordion.default">
				<div class="elementor-widget-container">
					
		<div class="jltma-advanced-accordion" id="jltma-advanced-accordion-a10212b" data-accordion-id="a10212b" 		data-accordion-id="a10212b">
			<div class="ma-accordion-wrap ma-accordion-icon-align-right ma-accordion-a10212b"">

				
					<div
						class="jltma-accordion-item elementor-repeater-item-71759dd ">
						<div id="jltma-accordion-tab-title-1681" class="jltma-accordion-tab-title jltma-accordion-header" tabindex="1681" data-tab="1" role="tab" aria-controls="jltma-accordion-tab-content-1681">
							<div class="jltma-accordion-title-icon">

								
								<div class="jltma-accordion-title-text">
									What services are offered by BSL Gaming for SportsBook Software Development?								</div>
							</div>

																<span class="jltma-accordion-toggle-icon">
										<i aria-hidden="true" class="jltma-el-accordion-icon-closed fas fa-minus"></i><i aria-hidden="true" class="jltma-el-accordion-icon-opened fas fa-bullseye"></i>									</span>
								
						</div>

						<div id="jltma-accordion-tab-content-1681" class="jltma-accordion-tab-content" data-tab="1" role="tabpanel" aria-labelledby="jltma-accordion-tab-title-1681">
							<p><span style="font-weight: 400;">BSL Gaming offers end-to-end SportsBook software development services including custom sports betting platforms, mobile application development,  fantasy games, slot games, white-label solutions, casino game development &amp; more.</span></p>						</div>

					</div>
				
					<div
						class="jltma-accordion-item elementor-repeater-item-5c5eddf ">
						<div id="jltma-accordion-tab-title-1682" class="jltma-accordion-tab-title jltma-accordion-header" tabindex="1682" data-tab="2" role="tab" aria-controls="jltma-accordion-tab-content-1682">
							<div class="jltma-accordion-title-icon">

								
								<div class="jltma-accordion-title-text">
									Which features are provided in the casino software development?								</div>
							</div>

																<span class="jltma-accordion-toggle-icon">
										<i aria-hidden="true" class="jltma-el-accordion-icon-closed fas fa-minus"></i><i aria-hidden="true" class="jltma-el-accordion-icon-opened fas fa-bullseye"></i>									</span>
								
						</div>

						<div id="jltma-accordion-tab-content-1682" class="jltma-accordion-tab-content" data-tab="2" role="tabpanel" aria-labelledby="jltma-accordion-tab-title-1682">
							<p><span style="font-weight: 400;">In casino software development, we provide features including Multi-language &amp; currency Support, Custom Game Lobby, regular game auto updation, Custom Casino integration &amp; scalability.</span></p>						</div>

					</div>
				
					<div
						class="jltma-accordion-item elementor-repeater-item-c35193d ">
						<div id="jltma-accordion-tab-title-1683" class="jltma-accordion-tab-title jltma-accordion-header" tabindex="1683" data-tab="3" role="tab" aria-controls="jltma-accordion-tab-content-1683">
							<div class="jltma-accordion-title-icon">

								
								<div class="jltma-accordion-title-text">
									What is the pricing structure of SportsBook or casino platform development?								</div>
							</div>

																<span class="jltma-accordion-toggle-icon">
										<i aria-hidden="true" class="jltma-el-accordion-icon-closed fas fa-minus"></i><i aria-hidden="true" class="jltma-el-accordion-icon-opened fas fa-bullseye"></i>									</span>
								
						</div>

						<div id="jltma-accordion-tab-content-1683" class="jltma-accordion-tab-content" data-tab="3" role="tabpanel" aria-labelledby="jltma-accordion-tab-title-1683">
							<p><span style="font-weight: 400;">The pricing is dependent on the business requirements, features, and complexity of the solution. To know the exact pricing, please contact our team or <a href="/contact" target="_blank" rel="noopener">schedule a demo.</a></span></p>						</div>

					</div>
				
					<div
						class="jltma-accordion-item elementor-repeater-item-3c58090 ">
						<div id="jltma-accordion-tab-title-1684" class="jltma-accordion-tab-title jltma-accordion-header" tabindex="1684" data-tab="4" role="tab" aria-controls="jltma-accordion-tab-content-1684">
							<div class="jltma-accordion-title-icon">

								
								<div class="jltma-accordion-title-text">
									Why should I hire BSL Gaming for SportsBook development &amp; casino solutions?								</div>
							</div>

																<span class="jltma-accordion-toggle-icon">
										<i aria-hidden="true" class="jltma-el-accordion-icon-closed fas fa-minus"></i><i aria-hidden="true" class="jltma-el-accordion-icon-opened fas fa-bullseye"></i>									</span>
								
						</div>

						<div id="jltma-accordion-tab-content-1684" class="jltma-accordion-tab-content" data-tab="4" role="tabpanel" aria-labelledby="jltma-accordion-tab-title-1684">
							<p><span style="font-weight: 400;">BSL Gaming has years of expertise and a skilled team of software developers who create custom sports book platforms for clients worldwide. We are a one-stop solution for delivering casino game development &amp; sports betting solutions with better user experience, providing multi-currency support, and many features that stay ahead of other competitors.</span></p>						</div>

					</div>
				
					<div
						class="jltma-accordion-item elementor-repeater-item-fe656c3 ">
						<div id="jltma-accordion-tab-title-1685" class="jltma-accordion-tab-title jltma-accordion-header" tabindex="1685" data-tab="5" role="tab" aria-controls="jltma-accordion-tab-content-1685">
							<div class="jltma-accordion-title-icon">

								
								<div class="jltma-accordion-title-text">
									What is the expected timeframe for developing a iGaming platform?								</div>
							</div>

																<span class="jltma-accordion-toggle-icon">
										<i aria-hidden="true" class="jltma-el-accordion-icon-closed fas fa-minus"></i><i aria-hidden="true" class="jltma-el-accordion-icon-opened fas fa-bullseye"></i>									</span>
								
						</div>

						<div id="jltma-accordion-tab-content-1685" class="jltma-accordion-tab-content" data-tab="5" role="tabpanel" aria-labelledby="jltma-accordion-tab-title-1685">
							<p><span style="font-weight: 400;">The expected timeframe to deliver a customized iGaming solution is around 3-4 weeks based on the complexity and functionalities of the product. Customized solutions would be created and delivered as per features, level of customization, and integrations.</span></p>						</div>

					</div>
							</div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
		
		
			</div>

	
</main>

		
@endsection
