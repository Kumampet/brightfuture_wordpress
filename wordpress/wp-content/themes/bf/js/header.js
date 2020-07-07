$(function () {
    //objedt-fit（IE対策）
    objectFitImages();
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