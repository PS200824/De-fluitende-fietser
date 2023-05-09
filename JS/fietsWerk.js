$(function () {
  setInterval(function () {
    $(".animateable").animate({
      left: $(window).innerWidth() - 50
    }, 1000, function () {
      $(".animateable").animate({
        left: 0
      }, 1000);
    });
  }, 2000);
});