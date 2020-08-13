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
  //Header
  var _window = $(window),
    _header = $('#pc-navi'),
    _header_sp = $('#sp-navi'),
    trigger_point = $(window).height(),
    _target = $('img#logo-img');

  if ($(window).width() < 767) {
    _window.on('scroll', function () {
      if (_window.scrollTop() > trigger_point) {
        _header_sp.addClass('transform');
        _target.attr('src', './wp-content/themes/bf/img/header_logo_black_2x.png');
      }
      else {
        _header_sp.removeClass('transform');
        _target.attr('src', './wp-content/themes/bf/img/header_logo_white_2x.png');
      }
    });
  } else {
    _window.on('scroll', function () {
      if (_window.scrollTop() > trigger_point) {
        _header.addClass('transform');
        _target.attr('src', './wp-content/themes/bf/img/header_logo_black_2x.png');
      }
      else {
        _header.removeClass('transform');
        _target.attr('src', './wp-content/themes/bf/img/header_logo_white_2x.png');
      }
    });
  }

  _window.trigger('scroll');
});