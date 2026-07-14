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
					<h3 class="elementor-heading-title elementor-size-default"><span>PREMIER iGAMING SOFTWARE DEVELOPMENT &amp; SOLUTIONS PROVIDER <br>COMPANY</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-2aab7597 elementor-widget__width-initial elementor-widget-laptop__width-initial elementor-widget elementor-widget-text-editor" data-id="2aab7597" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Recognized for engineering excellence and unparalleled platform performance, BSL Gaming creates scalable, high-retention software solutions<span style="font-weight: 400;"><strong> </strong>that set new standards. We align closely with your strategic requirements, pushing technological boundaries to deliver immersive and profitable entertainment ecosystems. </span></p><p><span style="font-weight: 400;">Backed by a proven track record in the iGaming sector, BSL Gaming is the trusted technology partner for forward-thinking operators. Additionally, our team of experts focuses on the client&#8217;s detailed requirements. Utilizing rigorous project analysis, we architect custom iGaming platforms</span><span style="font-weight: 400;"> that maximize user engagement and drive sustainable revenue.</span></p>								</div>
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
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>As a specialized leader in sportsbook platform development, BSL Gaming stands as a one-stop solution in the competitive landscape of this industry. We boast a team of expert software developers who excel in crafting tailored solutions to meet unique business requirements.</p></div>                  </div>
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
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>Maximize your ROI with enterprise-grade sports betting solutions. We integrate premium third-party integration, &amp; high-quality features. Our tailored approach empowers businesses to launch, manage, &amp; scale their sports betting operations, influencing players to play longer.</p></div>                  </div>
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
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>Leveraging deep insights into player psychology and market trends, our expert engineers build highly intuitive sports betting solutions that elevate gaming experiences to new heights. Our focus is to enhance the user journey, ensuring accessibility &amp; making the product visually appealing.</p></div>                  </div>
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
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>Driven by decades of combined industry experience, our dedicated casino development studio, guarantees seamless deployment and long-term operational success. We provide a highly reliable, full-stack casino gaming infrastructure engineered for the modern digital vertical.</p></div>                  </div>
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
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>We are your definitive partner for seamless sportsbook integration. Our bespoke approach addresses your exact technical requirements, delivering top-notch solutions, with expertise in API integration, Player management, &amp; other Integrations to ensure smooth compatibility across the entire solution. </p></div>                  </div>
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
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>Our elite mobile development team engineers feature-rich, high-performance applications for sports betting, casino suites, and crash games tailored to operator requirements. As a trusted mobile partner, we deliver flawless cross-platform experiences that keep your players connected and engaged anywhere.</p></div>                  </div>
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
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>We architect captivating social gaming ecosystems designed to exponentially increase community engagement. By seamlessly integrating social Gaming Development. It ensures seamless integration with social media platforms, allowing players to easily connect with friends &amp; share their gaming experiences.</p></div>                  </div>
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
                                        <div class="ue-flip-box__panel__element ue-flip-box__description"><p>From ground-up eSports platform development to bespoke module customization, our technical architects design dynamic, high-concurrency platforms that empower organizers and players alike. Our understanding of eSports culture enables us to integrate gamification elements that foster community interaction more easily.</p></div>                  </div>
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
									<p>Our bespoke software development services are precision-engineered to solve complex operational challenges, driving innovationvation, enabling scalability, and giving businesses a competitive edge in today’s fast-evolving digital landscape.</p>								</div>
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
									<p>BSL Gaming integrates robust, globalized multi-currency and crypto-wallet support into every platform. We ensure frictionless, bank-grade secure transactions for international players, significantly enhancing accessibility, trust, and global market penetration.</p>								</div>
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
									<p>We deploy automated, zero-downtime update pipelines across all our iGaming platforms and Casino Solutions.rantee fresh content, keeping players engaged and satisfied while reflecting the platform’s commitment to continuous improvement.</p>								</div>
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
									<p>In modern iGaming, user experience is paramount. We focus on hyper-intuitive betting interfaces, fluidvigation, and responsive design to ensure effortless and enjoyable betting. We offer personalized recommendations and real-time updates in our iGaming platforms to enhance overall user experience.</p>								</div>
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
									<p>Our platforms are built on robust, horizontally scalable architectures that guarantee zero-lag gameplay, exceptional user experiences, and reliable system performance. Our iGaming solutions drive long-term success with custom game engines, real-time analytics, and tailored features precisely aligned with your business goals.</p>								</div>
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
									<p>As elite technologists in the iGaming sector, we engineer solutions that are aggressively feature-rich, highly performantal, and scalable. Players enjoy an engaging, uninterrupted experience that boosts retention. Our platforms enable operators to quickly adapt to market trends and maintain high performance across all devices.</p>								</div>
				</div>
				</div>
				</div>
					</div>
				</div>
@include("partials.testimonials")
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
		

<!-- Trust Numbers Section -->
<div class="trust-numbers-premium" style="overflow: hidden; padding: 100px 20px; background: linear-gradient(135deg, #050505 0%, #111 100%); position: relative; margin: 40px 0;">
    <div style="position: absolute; top: -50%; left: -20%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(212,175,55,0.1) 0%, rgba(0,0,0,0) 70%); border-radius: 50%; filter: blur(40px);"></div>
    <div style="position: absolute; bottom: -50%; right: -20%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(212,175,55,0.05) 0%, rgba(0,0,0,0) 70%); border-radius: 50%; filter: blur(40px);"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 40px; position: relative; z-index: 10;">
        
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(212,175,55,0.15); border-radius: 20px; padding: 50px 20px; text-align: center; backdrop-filter: blur(15px); box-shadow: 0 4px 30px rgba(0,0,0,0.1); transition: all 0.4s ease;" onmouseover="this.style.transform='translateY(-12px)'; this.style.borderColor='rgba(212,175,55,0.5)'; this.style.boxShadow='0 20px 40px rgba(212,175,55,0.1)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(212,175,55,0.15)'; this.style.boxShadow='0 4px 30px rgba(0,0,0,0.1)';">
            <h2 style="color: #D4AF37; font-size: 64px; font-weight: 800; margin: 0 0 15px 0; font-family: 'Outfit', 'Inter', sans-serif; line-height: 1; text-shadow: 0 2px 10px rgba(212,175,55,0.3);">{{ $settings['trust_number_1'] ?? '10+' }}</h2>
            <p style="color: #cccccc; font-size: 15px; font-weight: 500; text-transform: uppercase; letter-spacing: 3px; margin: 0; font-family: 'Inter', sans-serif;">{{ $settings['trust_label_1'] ?? 'Years Experience' }}</p>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(212,175,55,0.15); border-radius: 20px; padding: 50px 20px; text-align: center; backdrop-filter: blur(15px); box-shadow: 0 4px 30px rgba(0,0,0,0.1); transition: all 0.4s ease;" onmouseover="this.style.transform='translateY(-12px)'; this.style.borderColor='rgba(212,175,55,0.5)'; this.style.boxShadow='0 20px 40px rgba(212,175,55,0.1)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(212,175,55,0.15)'; this.style.boxShadow='0 4px 30px rgba(0,0,0,0.1)';">
            <h2 style="color: #D4AF37; font-size: 64px; font-weight: 800; margin: 0 0 15px 0; font-family: 'Outfit', 'Inter', sans-serif; line-height: 1; text-shadow: 0 2px 10px rgba(212,175,55,0.3);">{{ $settings['trust_number_2'] ?? '150+' }}</h2>
            <p style="color: #cccccc; font-size: 15px; font-weight: 500; text-transform: uppercase; letter-spacing: 3px; margin: 0; font-family: 'Inter', sans-serif;">{{ $settings['trust_label_2'] ?? 'Projects Completed' }}</p>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(212,175,55,0.15); border-radius: 20px; padding: 50px 20px; text-align: center; backdrop-filter: blur(15px); box-shadow: 0 4px 30px rgba(0,0,0,0.1); transition: all 0.4s ease;" onmouseover="this.style.transform='translateY(-12px)'; this.style.borderColor='rgba(212,175,55,0.5)'; this.style.boxShadow='0 20px 40px rgba(212,175,55,0.1)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(212,175,55,0.15)'; this.style.boxShadow='0 4px 30px rgba(0,0,0,0.1)';">
            <h2 style="color: #D4AF37; font-size: 64px; font-weight: 800; margin: 0 0 15px 0; font-family: 'Outfit', 'Inter', sans-serif; line-height: 1; text-shadow: 0 2px 10px rgba(212,175,55,0.3);">{{ $settings['trust_number_3'] ?? '50+' }}</h2>
            <p style="color: #cccccc; font-size: 15px; font-weight: 500; text-transform: uppercase; letter-spacing: 3px; margin: 0; font-family: 'Inter', sans-serif;">{{ $settings['trust_label_3'] ?? 'Industry Experts' }}</p>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(212,175,55,0.15); border-radius: 20px; padding: 50px 20px; text-align: center; backdrop-filter: blur(15px); box-shadow: 0 4px 30px rgba(0,0,0,0.1); transition: all 0.4s ease;" onmouseover="this.style.transform='translateY(-12px)'; this.style.borderColor='rgba(212,175,55,0.5)'; this.style.boxShadow='0 20px 40px rgba(212,175,55,0.1)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(212,175,55,0.15)'; this.style.boxShadow='0 4px 30px rgba(0,0,0,0.1)';">
            <h2 style="color: #D4AF37; font-size: 64px; font-weight: 800; margin: 0 0 15px 0; font-family: 'Outfit', 'Inter', sans-serif; line-height: 1; text-shadow: 0 2px 10px rgba(212,175,55,0.3);">{{ $settings['trust_number_4'] ?? '100%' }}</h2>
            <p style="color: #cccccc; font-size: 15px; font-weight: 500; text-transform: uppercase; letter-spacing: 3px; margin: 0; font-family: 'Inter', sans-serif;">{{ $settings['trust_label_4'] ?? 'Client Satisfaction' }}</p>
        </div>

    </div>
</div>
<!-- End Trust Numbers Section -->

<div class="elementor-element elementor-element-a0f1632 e-flex e-con-boxed e-con e-parent" data-id="a0f1632" data-element_type="container" data-e-type="container" id="read-blog-ours" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-d01e5f9 textoDegradado elementor-widget elementor-widget-heading" data-id="d01e5f9" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Read our <span>blogs</span></h3>				</div>
				</div>

<div class="elementor-element elementor-element-97d4a7c elementor-widget__width-inherit our-blog-read elementor-widget-tablet__width-initial elementor-widget-laptop__width-inherit elementor-widget elementor-widget-elementskit-blog-posts" data-id="97d4a7c" data-element_type="widget" data-e-type="widget" id="our-blog-post" data-widget_type="elementskit-blog-posts.default">
				<div class="elementor-widget-container">
					<div class="ekit-wid-con" >        <div id="post-items--97d4a7c" class="row post-items">
                    
                    @foreach($latestBlogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="elementskit-post-image-card">
                            <div class="elementskit-entry-header">
                                <a href="/blog/{{ $blog->slug }}" class="elementskit-entry-thumb">
                                    <img fifu-featured="1" decoding="async" src="{{ $blog->image ? asset('storage/' . $blog->image) : 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Crect%20width%3D%22800%22%20height%3D%22250%22%20fill%3D%22%231e1e1e%22%2F%3E%3C%2Fsvg%3E' }}" alt="{{ $blog->title }}" title="{{ $blog->title }}">
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
                                            {{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') : $blog->created_at->format('M d, Y') }}
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
                                        <img fifu-featured="1" decoding="async" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Crect%20width%3D%22800%22%20height%3D%22250%22%20fill%3D%22%231e1e1e%22%2F%3E%3C%2Fsvg%3E" alt="Placeholder" title="Placeholder">
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

            @foreach($latestBlogs as $blog)
            <div class="jltma-post-outer-container jltma-col-4">
                <div class="jltma-blog-post jltma-default-post classic">
                    <div>
                        <div class="elementor-animation-grow">
                            <div class="jltma-post-thumbnail jltma-img-shine jltma-img-shape-none">
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
            @endforeach

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
