/**
 * Global Variables and Methods
 */

export const viewport_width = $(window).width();

/**
 * Determine if the target element is in view and if so return true
 */
export const is_in_view = function (target, el_offset = 0) {
  const amount_scrolled = $(window).scrollTop();
  let el_position = $(target).offset();
    el_position = el_position ? el_position.top : '';

  let offset = el_offset;
  let trigger_position = el_position - offset;
  if (amount_scrolled >= trigger_position) {
    return true;
  }
};

/**
 * Adds the :onScreen pseudo selector to jQuery to affect elements visible in the viewport.
 */
(function ($) {
  $.expr[":"].onScreen = function (elem) {
    var $window = $(window);
    var viewport_top = $window.scrollTop();
    var viewport_height = $window.height();
    var viewport_bottom = viewport_top + viewport_height;
    var $elem = $(elem);
    var top = $elem.offset().top;
    var height = $elem.height();
    var bottom = top + height;

    return (top >= viewport_top && top < viewport_bottom) ||
      (bottom > viewport_top && bottom <= viewport_bottom) ||
      (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom);
  };
})(jQuery);
