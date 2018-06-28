/**
  * Social Sharing Links
  */
$('.js-social-share').click(function (e) {
  // we're not going to go to the link, just pull data from it
  e.preventDefault();

  // decide what social share url string to use based on 'data-social' value
  let social = $(this).data('social');

  // pull the a href value
  let url = $(this).attr('href');
  // pop window parameters
  let window_args = "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600";
  let share_link;

  if (url === '' || url === '#') {
    url = window.location.href;
  }

  if (social === 'facebook') {
    share_link = "https://www.facebook.com/sharer/sharer.php?u=" + url;
  } else if (social === 'twitter') {
    share_link = "https://twitter.com/intent/tweet?url=" + url;
  } else {
    share_link = "https://www.linkedin.com/shareArticle?mini=true&url=" + url;
  }

  window.open(share_link, "", window_args);
});
