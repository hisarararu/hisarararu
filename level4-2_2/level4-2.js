
  //ヘッダーメニューを常に一番上に
  $(function() {
    var height=$("header").height();
    $("body").css("margin-top", height);
  });

  // ページ内移動
  $(function() {
      var H_nav = $("header").height();

      function pagelink(heightnum) {
          var headerH = heightnum;
          $("a.anchorlink").click(function() {
              var href = $(this).attr("href");
              var target = $(href == "#" || href == "" ? "body" : href);
              var position = target.offset().top - headerH;
              $("html, body").animate({ scrollTop: position }, 500, "swing");
              //return false;
          });
      }
      pagelink(H_nav);
  });

  // ドロワー
  $(document).ready(function() {
    $('.drawer').drawer();
  });

  // swiper
  var swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  // swiper自動再生
  var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
  pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
  // autoplay: {
  //   delay: 5000,
  //   disableOnInteraction: true
  // },
  });

  // フェードイン
  $(function(){
    function animation(){
      $('.fadeInUp').each(function(){
        //ターゲットの位置を取得
        var target = $(this).offset().top;
        //スクロール量を取得
        var scroll = $(window).scrollTop();
        //ウィンドウの高さを取得
        var windowHeight = $(window).height();
        //ターゲットまでスクロールするとフェードインする
        if (scroll > target - windowHeight){
          $(this).css('opacity','1');
          $(this).css('transform','translateY(0)');
        }
      });
    }
    animation();
    $(window).scroll(function (){
      animation();
    });
  });

  // accordion
  $(function(){
    
    $('.accordion2 p').click(function(){

      //クリックされたp要素に隣接する.accordion2の中の.innerを開いたり閉じたりする。
      $(this).next('.accordion2-inner').slideToggle();

      $(this).toggleClass("open");
      //thisにopenクラスを付与

    });
  });
