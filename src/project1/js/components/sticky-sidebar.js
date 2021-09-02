import { $window, STATE_CLASS } from '../constants/index';
import $ from 'jquery';

export default function stickySidebar() {

  const $singleBaseSection   = $('.article-single'),
        $defaultBaseSection  = $('.js-article-index'),
        $stickySection       = $('.js-sidebar'),
        $stickySectionWrap   = $('.js-sidebar-wrapper'),
        $singleBaseRelated   = $('.article-related');

  let   offsetBase,
        $baseSection,
        offsetSticky,
        windowHeight,
        fixStart,
        fixEnd,
        windowScrolled,
        stickyPadding = 30;


  if($stickySection.length){
    $baseSection = $defaultBaseSection;
    if($singleBaseSection.length){
      $baseSection = $singleBaseSection;
    }
    $window.scroll(function(){
      if(window.innerWidth > 768){
        windowHeight      = $window.height();
        windowScrolled    = $window.scrollTop();
        offsetBase        = $baseSection.offset().top + ($baseSection.outerHeight() - windowHeight) + stickyPadding;
        offsetSticky      = $baseSection.offset().top + $stickySection.outerHeight() + stickyPadding;
        fixStart          = offsetSticky - windowHeight;
        fixEnd            = $singleBaseRelated.outerHeight();
        if($baseSection.outerHeight() > $stickySection.outerHeight()){
          if(windowScrolled > fixStart && windowScrolled < offsetBase){
            $stickySection.addClass(STATE_CLASS.FIXED);
            $stickySection.removeClass(STATE_CLASS.STICK);
            $stickySection.removeAttr('style');
          }else if(windowScrolled >= offsetBase) {
            $stickySection.removeClass(STATE_CLASS.FIXED);
            $stickySection.addClass(STATE_CLASS.STICK);
            $stickySection.css('bottom', Math.abs(fixEnd));
          }else{
            $stickySection.removeClass(STATE_CLASS.FIXED);
            $stickySection.removeClass(STATE_CLASS.STICK);
            $stickySection.removeAttr('style');
          }
        }
      }

      if(window.outerWidth > 768 && window.innerWidth < 1180){
        if($stickySection.hasClass(STATE_CLASS.FIXED)){
          $stickySectionWrap.css('transform', 'translate3d(' + -Math.abs($window.scrollLeft()) + 'px, 0, 0)');
        } else {
          $stickySectionWrap.removeAttr('style');
        }
      } else {
        $stickySectionWrap.removeAttr('style');
      }

    });

    window.addEventListener('resize', function(){
      if(window.innerWidth < 768){
        $stickySection.removeClass(STATE_CLASS.FIXED);
        $stickySection.removeClass(STATE_CLASS.STICK);
        $stickySection.removeAttr('style');
        $('.js-sidebar-wrapper').removeAttr('style');
      }
    });

  }

}
