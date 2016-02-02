jQuery(function(){
    var setElm = jQuery('.kidoku'),
    delayHeight = 100;
 
    setElm.css({display:'block',opacity:'0'});
    jQuery('html,body').animate({scrollTop:0},1);
 
    jQuery(window).on('load scroll resize',function(){
        setElm.each(function(){
            var setThis = jQuery(this),
            elmTop = setThis.offset().top,
            elmHeight = setThis.height(),
            scrTop = jQuery(window).scrollTop(),
            winHeight = jQuery(window).height();
            if (scrTop > elmTop - winHeight + delayHeight && scrTop < elmTop + elmHeight){
                setThis.stop().animate({opacity:'1'},500); // 【上】からスクロールしてきた時のイベント
            } else if (scrTop < elmTop - winHeight + delayHeight && scrTop < elmTop + delayHeight){
                setThis.stop().animate({opacity:'0'},500); // 【下】からスクロールしてきた時のイベント
            }
        });
    });
});
