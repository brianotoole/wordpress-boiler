/**
 * -- EVENTS
 */
import { viewport_width, is_in_view } from "./globals";
import { parallax } from "./parallax";
import { fitText } from "./fit-text";

/**
  * These functions execute in order.
  */
(function(){
  fitText();
})();

/**
  * Events that fire when the page is loaded.
  */
$(document).ready(function(){
  $('.carousel').slick({
    adaptiveHeight: true
  });
}); // /.ready


/**
 * Events that fire on Window Scroll
 */

$(window).scroll(() => {
  /**
    * Homepage marketing points section animate lines when in viewport
    */
  if ( is_in_view('#how_it_works', 200) ) {
    if ( viewport_width >= 768 ) {
      $('.marketing-points--alt .marketing-points__heading.is-first .line').animate({
        width: '100%'
      }, 500, () => {
        setTimeout(() => {
          $('.marketing-points--alt .marketing-points__heading.is-middle .line').animate({
            width: '100%'
          }, 500);
        }, 200);
      });
    }
  }

  // parallax effect on scroll
  parallax('.js-parallax');

  parallax('.js-parallax-shape',1090);

}); // /.scroll
