import $ from 'jquery';
import 'slick-carousel';

const slickHeroOption = {
  slidesToShow: 1,
  dots: false,
  autoplay: true,
  autoplaySpeed: 4000,
  draggable: true,
  adaptiveHeight: true
};

export default function slickHero(params) {
  const $sliderContainer = $('#js-hero-slider');
  const $sliderItemContainer = $sliderContainer.find('.hero__slider-item');
  const $sliderCount = $('.js-hero-slider-counter');
  let $currentSlideIndex;

  const $slickTarget = $(params.target);
  let options = {};

  if(!$slickTarget) return;

  if(typeof params.options === 'undefined') {
    options = slickHeroOption;
  } else {
    options = params.options;
  }

  $slickTarget.slick(options);

  //init
  $(window).on('load', function() {
    //get current slider in first load and insert the result wherever you want
    $currentSlideIndex = $currentSlideIndex = $sliderContainer.find('.slick-active').attr('data-slick-index');
    $sliderCount.find('.js-slide-current').html('0' + parseInt($currentSlideIndex + 1));

    //get total slider item and insert the result wherever you want
    $sliderCount.find('.js-slide-total').html('0' + $sliderItemContainer.length);
  });

  $sliderContainer.on('beforeChange', function() {
    //an event listener that will give you chance what you want to do before changing the slide
  })

  $sliderContainer.on('afterChange', function() {
    //an event listener that will listen if the slide already changed

    //get the slick index
    $currentSlideIndex = $(this).find('.slick-active').attr('data-slick-index');

    //insert the $currentSlideIndex wherever you want
    $sliderCount.find('.js-slide-current').html('0' + (parseInt($currentSlideIndex) + 1));

    // you can put what you want here.
    // this is just an example so you can create what you want
    const $previousSlider = $(this).find('.slick-slide');
    const $currentSlider = $(this).find('.slick-active');
    const $previousSliderContainer = $previousSlider.find('.hero__slider-item');
    const $currentSliderContainer = $currentSlider.find('.hero__slider-item');

    if($('.is-ie.is-windows').length){ // ie11 animation for slider
      $previousSliderContainer.removeClass('is-active').find('a').animate({'background-size':'130%'});
      $currentSliderContainer.addClass('is-active').find('a').animate({'background-size':'100%'});
    } else{
      $previousSliderContainer.removeClass('is-active');
      $currentSliderContainer.addClass('is-active');
    }
  });
}
