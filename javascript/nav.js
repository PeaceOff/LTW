$(document).ready(function() {

  $(window).scroll(function () {
    if ($(window).scrollTop() > 326) {
      $('#nav_bar').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 326.5) {
      $('#nav_bar').removeClass('navbar-fixed');
    }
  });
});
