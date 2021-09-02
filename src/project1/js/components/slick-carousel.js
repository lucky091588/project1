import $ from 'jquery';
import 'slick-carousel';

const slickCarouselDefault = {
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  autoplaySpeed: 4000,
  draggable: true,
  infinite: true,
  touchMove: true,
  adaptiveHeight: true
};

export default function slickCarousel(params) {
    const $slickTarget = $(params.target);
    let options = {};

    if(!$slickTarget) return;

    if(typeof params.options === 'undefined') {
        options = slickCarouselDefault;
    } else {
        options = params.options;
    }
    $(window).on('load resize orientationchange', function() {
      if ($(window).width() > 767) {
        if ($slickTarget.hasClass('slick-initialized')) {
            $slickTarget.slick('unslick');
        }
      } else {
        if (!$slickTarget.hasClass('slick-initialized')) {
            $slickTarget.slick(options);
            window.dispatchEvent(new Event('resize'));
        }
      }
    });
}
