
    /* -------------------------------------
    Init AOS
    ---------------------------------------- */
    AOS.init({
        once:true
    });

    /* -------------------------------------
    Hide/Show Scroll to Top icon
    ---------------------------------------- */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('.scrollTop').fadeIn();
        } else {
            $('.scrollTop').fadeOut();
        }
    });

    /* -------------------------------------
    Hide/Show Scroll down icon
    ---------------------------------------- */
    if ($(document).height() < $(window).height()+250) {
        $('.scrollDown').hide();
    }else{
        $(window).scroll(function () {
            if ($(this).scrollTop() < 20) {
                $('.scrollDown').fadeIn();
            } else {
                $('.scrollDown').fadeOut();
            }
        });
    }

    /* -------------------------------------
    Scroll to (Easing)
    ---------------------------------------- */
    $('.scrollTop').click(function() {
        $(window.opera ? 'html' : 'html, body').animate({
            scrollTop: 0
        }, 'slow');
    });

    /* -------------------------------------
    Tiny slider config
    ---------------------------------------- */
    var slider = tns({
        container: '#slider',
        items: 1,
        slideBy: 'page',
        autoplayButtonOutput:false,
        controls:false,
        autoplay: true,
        mouseDrag:true
      });