$(function () {
    $('div.navi-btn').on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('ul.sp-menu').removeClass('menu-open');
        } else {
            $(this).addClass('active');
            $('ul.sp-menu').addClass('menu-open');
        }
    });
    //objedt-fit（IE対策）
    objectFitImages();
});