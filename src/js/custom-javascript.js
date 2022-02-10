// Add your custom JS here.
// ここから
jQuery(function() {
  // wowの読み込み
  new WOW().init();

  // ナビゲーション
  $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .click-nav').toggleClass('show');
      $('body').toggleClass('fixed');

    });


    if (window.matchMedia('(min-width: 769px)').matches) {
      /* ウィンドウサイズ768以上の処理を記述 */
      $(window).scroll(function () {
        var TopHeight = $('.top').outerHeight(true);
        if ($(this).scrollTop() > TopHeight - 95) {
          $('.nav-list').addClass('Telescopic');
          $('.nav_toggle').fadeIn(800);
        } else {
          $('.nav-list').removeClass('Telescopic');
          $('.nav_toggle').fadeOut(600);
        }
      });
    }


    $(window).on('scroll', function (){
    $('.works-list>.item>.text>.title').each(function () {
      var changeOffset = $(this).offset().top;
      var scrolltop = $(window).scrollTop();
      var wh = $(window).height();
      if(scrolltop > changeOffset -  3* wh / 4    ){
      $(this).addClass('change');
      }
    });
  });

  // nav-list特定の位置までスクロール
  $('.nav-service').click(function() {
    $("html,body").animate({scrollTop:$(".service").offset().top});
  });
  
  $('.nav-works').click(function() {
    $("html,body").animate({scrollTop:$(".works").offset().top});
  });

  $('.nav-price').click(function() {
    $("html,body").animate({scrollTop:$(".price").offset().top});
  });
  
  $('.nav-about').click(function() {
    $("html,body").animate({scrollTop:$(".about").offset().top});
  });
  
  $('.nav-contact').click(function() {
    $("html,body").animate({scrollTop:$(".contact").offset().top});
  });

  // click-list特定の位置までスクロール
  $('.click-service').click(function() {
    $("html,body").animate({scrollTop:$(".service").offset().top});
    $('.nav_toggle, .click-nav').removeClass("show");
    $('body').removeClass('fixed');
  });
  
  $('.click-works').click(function() {
    $("html,body").animate({scrollTop:$(".works").offset().top});
    $('.nav_toggle, .click-nav').removeClass("show");
    $('body').removeClass('fixed');
  });

  $('.click-price').click(function() {
    $("html,body").animate({scrollTop:$(".price").offset().top});
    $('.nav_toggle, .click-nav').removeClass("show");
    $('body').removeClass('fixed');
  });
  
  $('.click-about').click(function() {
    $("html,body").animate({scrollTop:$(".about").offset().top});
    $('.nav_toggle, .click-nav').removeClass("show");
    $('body').removeClass('fixed');
  });
  
  $('.click-contact').click(function() {
    $("html,body").animate({scrollTop:$(".contact").offset().top});
    $('.nav_toggle, .click-nav').removeClass("show");
    $('body').removeClass('fixed');
  });
  
  // キャッチコピーのアニメーション
  $(window).on('scroll', function (){
    $('.about-catchcopy').each(function () {
      var changeOffset = $(this).offset().top;
      var scrolltop = $(window).scrollTop();
      var $target = $(".about-catchcopy");
      var CLASSNAME = "-visible";
      var wh = $(window).height();
      if(scrolltop > changeOffset -  2* wh / 3){
        $target.addClass(CLASSNAME);
      }
    });
  });

  // top-pageの実装
  $(window).on('scroll', function (){
  var now = $( window ).scrollTop() ;
  if( now > 1 ){

    $( '#page-top' ).fadeIn( "slow" ) ;
  }
  else
  {
      $( '#page-top' ).fadeOut( 'slow' ) ;
  }
　});
$( '#move-page-top' ).click(function(){
    $( 'html,body' ).animate( {scrollTop:0} , 'slow' ) ;
	}
) ;

// お問い合わせフォーム
$(function() {
  document.addEventListener( 'wpcf7mailsent',function( event ){
  location = 'https://aki19980208.xsrv.jp/portfolio/complete';
  }, false );
});
});