$(document).ready(function() {

  $(window).scroll(function () {
    if ($(window).scrollTop() > 350) {
      $('#nav_bar').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 300) {
      $('#nav_bar').removeClass('navbar-fixed');
    }
  });
});
