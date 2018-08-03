
$(document).ready(function() {
    // mobile drop down menu
    $('.menu-btn').click(function() {
        /*$('.dropdownNav').toggleClass('expand');*/
        $('.dropdownNav').slideToggle();
        $(this).toggleClass('click');
    });//end mobile click
    // change nav color/opacity on scroll
    function scrollHandler (event){
        var screenTop = $(document).scrollTop(); //returns scroll position from top of document
        if (screenTop <= 10) {
            $('#nav nav').removeClass('opaque');
            $('#nav nav').addClass('tall');
        } else {
            $('#nav nav').addClass('opaque');
            $('#nav nav').removeClass('tall');
        }
    }
    $(document).on('scroll', scrollHandler);
    scrollHandler();
    /* Every time the window is scrolled ... */
    function hidemeScrollHandler (event){
        /* Check the location of each desired element */
        $('.hideme').each(function(i){
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if(bottom_of_window > bottom_of_object){
                $(this).removeClass('hideme');
            }
        });
        // shows the object when scrolled halfway through it
        $('.hidemehalf').each(function(i){
            var bottom_of_object = $(this).position().top + $(this).outerHeight()/3;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if(bottom_of_window > bottom_of_object){
                $(this).removeClass('hidemehalf');
            }
        });
    }
    $(window).scroll(hidemeScrollHandler);
    hidemeScrollHandler();
    /* Make the text animation delay until scrolled to */
    function titleScrollHandler (event) {
        $('.titleScroll').each(function(i){
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if(bottom_of_window > bottom_of_object){
                $(this).addClass('reveal-text');
            }
        });
        $('.titleScroll2').each(function(i){
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if(bottom_of_window > bottom_of_object){
                $(this).addClass('reveal-text2');
            }
        });
    }
    $(window).scroll(titleScrollHandler);
    titleScrollHandler();

});
