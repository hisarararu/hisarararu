  // 5つの機能実装

  // アラート
  function clickEvent() {
    alert('クリックされました');
  }

  // マウスオーバ
  function zoom( $this, $height, $width ) {
    $this.style.height = $height + 'px';
    $this.style.width = $width + 'px';
  }

  // アニメーション
  $(function(){
    $(".headline-animation").click(function() {
      $(".headline-animation-h2").animate({fontSize:'55px'}, 600)
   }); 
  });

  // モーダル
  $(function(){
    $('.js-modal-open').on('click',function(){
        $('.js-modal').fadeIn();
        return false;
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    });
});
  
  // トップへ戻るボタン
 

    var syncerTimeout = null ;

    $( function()
    {
      // スクロールイベントの設定
      $( window ).scroll( function()
      {
        // 1秒ごとに処理
        if( syncerTimeout == null )
        {
          // セットタイムアウトを設定
          syncerTimeout = setTimeout( function(){

            // 対象のエレメント
            var element = $( '#page-top' ) ;

            // 現在、表示されているか？
            var visible = element.is( ':visible' ) ;

            // 最上部から現在位置までの距離を取得して、変数[now]に格納
            var now = $( window ).scrollTop() ;

            // 最下部から現在位置までの距離を計算して、変数[under]に格納
            var under = $( 'body' ).height() - ( now + $(window).height() ) ;

            // 最上部から現在位置までの距離(now)が1500以上かつ
            // 最下部から現在位置までの距離(under)が200px以上かつ…
            if( now > 1500 && 0 < under )
            {
              // 非表示状態だったら
              if( !visible )
              {
                // [#page-top]をゆっくりフェードインする
                element.fadeIn( 'slow' ) ;
              }
            }

            // 1500px以下かつ
            // 表示状態だったら
            else if( visible )
            {
              // [#page-top]をゆっくりフェードアウトする
              element.fadeOut( 'slow' ) ;
            }

            // フラグを削除
            syncerTimeout = null ;
          } , 1000 ) ;
        }
      } ) ;

      // クリックイベントを設定する
      $( '#move-page-top' ).click(
        function()
        {
          // スムーズにスクロールする
          $( 'html,body' ).animate( {scrollTop:0} , 'slow' ) ;
        }
      ) ;
    } ) ;

  // ドロワー
  $(document).ready(function() {
  $('.drawer').drawer();
  });