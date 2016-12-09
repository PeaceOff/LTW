$(document).ready(function() {

  $(window).scroll(function () {
    if ($(window).scrollTop() > 320) {
      $('#nav_bar').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 320) {
      $('#nav_bar').removeClass('navbar-fixed');
    }
  });
});
