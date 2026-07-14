<?php
$content = file_get_contents('resources/views/home.blade.php');

$startMarker = '<div class="swiper-wrapper">';
$endMarker = '</div>

					<div class="swiper-pagination"></div>';

$startIndex = strpos($content, $startMarker);
$endIndex = strpos($content, $endMarker);

if ($startIndex !== false && $endIndex !== false) {
    $before = substr($content, 0, $startIndex + strlen($startMarker));
    $after = substr($content, $endIndex);
    
    $dynamicHtml = '
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
';

    file_put_contents('resources/views/home.blade.php', $before . $dynamicHtml . $after);
    echo "Successfully replaced testimonials.\n";
} else {
    echo "Could not find start or end markers.\n";
}
