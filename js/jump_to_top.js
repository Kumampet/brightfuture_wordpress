$(function() {
    var appear = false;
    var pagetop = $('#page-top-jummper');

    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {  //300pxスクロールしたら
        if (appear == false) {
          appear = true;
          pagetop.stop().animate({
            'opacity': '1'
          }, 200); 
        }
      } else {
        if (appear) {
          appear = false;
          pagetop.stop().animate({
            'opacity': '0' 
          }, 200); 
        }
      }
    });
    pagetop.click(function () {
      $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
      return false;
    });
  });
  