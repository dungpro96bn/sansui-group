$(function(){
  /* header */
  var state = false;
  var scrollpos;
  var winHeight;
  var headerNavHeight;
  function headerMenu() {
    if($(window).width() >= (parseInt(import.meta.env.VITE_BREAK_POINT)+1)) {
      $('#headerMenu').parents('body').addClass('PConly');
      $('#headerMenu .sp__menu').css({'display': 'none'});
      $('#headerMenu #hamburger').removeClass('js-hb-active');
      $('#headerMenu .modalMenu').removeClass('modalOn');
      $('#headerMenu .headerNav').removeClass('modalOn');
      $('body').removeClass('nav_fixed modalOn');
      state = false;
    } else {
      $('#headerMenu').parents('body').removeClass('PConly');
      $('#headerMenu .sp__menu').css({'display': 'flex'});
    }
  }
  function headerHeight() {
    if($(window).width() >= (parseInt(import.meta.env.VITE_BREAK_POINT)+1)) {
      $('#headerMenu .navItemList').css({'display': '', 'height': 'auto'});
    } else {
      winHeight = window.innerHeight;
      headerNavHeight = $('#headerMenu .headerNav').height();
      $('#headerMenu .navItemList').css({'height': winHeight - headerNavHeight, 'top': headerNavHeight});
    }
  }
  headerMenu();
  headerHeight();
  $(window).on('orientationchange resize', function(){
    headerMenu();
    headerHeight();
  });
  $('#headerMenu .headerLogo').show();
  $('#headerMenu .sp__menu').on('click', function(){
    if (state == false) {
      scrollpos = $(window).scrollTop();
      $('body').addClass('nav_fixed').css({
        'position': 'fixed', 'top': -scrollpos
      });
      state = true;
    } else {
      $('body').removeClass('nav_fixed').css({
        'position': '', 'top': 0
      });
      window.scrollTo(0, scrollpos);
      state = false;
    }
  });

  $('#topLayout #newLight .navItem:not(.navItemSp) a').each(function(){
    var topContentLink = $(this).attr('href').split('/');
    $(this).attr('href', topContentLink[3]);
  });

  /* hamburger */
  $('#headerMenu #hamburger').click(function() {
    $(this).toggleClass('active');
    $('#headerMenu .modalMenu').toggleClass('modalOn');
    $('#headerMenu .modalMenu').parent().toggleClass('modalOn');
    $('#headerMenu .hamburger--collapse').toggleClass('js-hb-active');
    $(this).parents('body').toggleClass('modalOn');//背景要素を止める（スタイル併用）
    $('#headerMenu .navItemList').slideToggle();
  });
  $('body:not(.PConly) #headerMenu .navItems a[href]').on('click', function(){
    $('#headerMenu .navItemList').slideUp();
    $('#headerMenu .modalMenu').removeClass('modalOn');
    $('#headerMenu .modalMenu').parent().removeClass('modalOn');
    $('#headerMenu .hamburger--collapse').removeClass('js-hb-active');
    $(this).parents('body').removeClass('modalOn');//背景要素を止める>解除（スタイル併用）
    $('body').removeClass('nav_fixed').css({
      'top': 0
    });
    window.scrollTo(0, scrollpos);
  });

  //グローバルナビの透過度変更
  $(window).on('scroll', function() {
    let headerScrollHeight;
      if($('#mvSlider').length){
        headerScrollHeight =  $('#mvSlider').height();
      }
      else { //ページタイトル + メニュー高さ
        headerScrollHeight =  350 + $('#headerMenu .headerNav').height();
        if($(window).width() < (parseInt(import.meta.env.VITE_BREAK_POINT))) {
          headerScrollHeight = 180 + $('#headerMenu .headerNav').height();
        }
      }

    if(!$('#headerMenu .modalMenu').hasClass('modalOn')) { //ハンバーガーの開閉でのスクロール認識を除く
      if ($(document).scrollTop() >= headerScrollHeight) { //TOP → メインビジュアルを通過した / OTHER → ヘッダー高さ分スクロールした
        $('#headerMenu .headerNav').css({'opacity': '1'});
        $('#headerMenu .headerNav').css({'top': '0'});
        $('#headerMenu .headerNav').css({'background': 'rgba(255,255,255,1)'});
      }
      else {
        $('#headerMenu .headerNav').css({'background': 'rgba(255,255,255,0.6)'});
        if($(document).scrollTop() <= $('#headerMenu .headerNav').height()) {
          $('#headerMenu .headerNav').css({'opacity': '1'});
          $('#headerMenu .headerNav').css({'top': '0'});
        }
        else {
          $('#headerMenu .headerNav').css({'opacity': '0'});
          $('#headerMenu .headerNav').css({'top': -$('#headerMenu .headerNav').height()}); //クリックできてしまうのでメニューごと上に移動
        }
      }
    }
  });
});
