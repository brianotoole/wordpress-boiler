// Nav
var trigger = $('#js-nav-toggle');
trigger.click(function() {
  $('#js-nav-mobile').toggleClass('nav-open');
  $('#js-nav-toggle').toggleClass('active');
  $('body').toggleClass('nav-open');
});
