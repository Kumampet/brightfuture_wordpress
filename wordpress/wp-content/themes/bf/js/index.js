$(function () {
  if (767 > $(window).width()) {
    $('img.bg:first-child').attr('src', './wp-content/themes/bf/mg/top_sp_1_2x.png');
    $('img.bg:nth-child(2)').attr('src', './wp-content/themes/bf/img/top_sp_2_2x.png');
    $('img.bg:nth-child(3)').attr('src', './wp-content/themes/bf/img/top_sp_3_2x.png');
    $('img.bg:nth-child(4)').attr('src', './wp-content/themes/bf/img/top_sp_4_2x.png');
  }
  $('.autoplay').slick({
    infinite: true,
    fade: true,
    arrows: false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
  });
});