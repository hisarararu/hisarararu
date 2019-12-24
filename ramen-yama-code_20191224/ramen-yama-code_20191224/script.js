// ハンバーガー
$(function() {
	　$('.Toggle').click(function() {
	　　$(this).toggleClass('active');
	
	　if ($(this).hasClass('active')) {
	　　$('.NavMenu').addClass('active');　 //クラスを付与
	　} else {
	　　$('.NavMenu').removeClass('active'); //クラスを外す
	　}
	　});
	});

	// facebookのレスポンシブ対応
	$(function () {
    var windowWidth = $(window).width();
    var htmlStr = $('#pageplugin').html();
    var timer = null;
    $(window).on('resize',function() {
        var resizedWidth = $(window).width();
        if(windowWidth != resizedWidth && resizedWidth < 500) {
            clearTimeout(timer);
            timer = setTimeout(function() {
                $('#pageplugin').html(htmlStr);
                window.FB.XFBML.parse();
　　　　　　　　　　　//window.FB.XFBML.parse()で再レンダリングします。
                var windowWidth = $(window).width();
            }, 500);
        }
    });
	});