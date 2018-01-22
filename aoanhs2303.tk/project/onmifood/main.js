$(document).ready(function ($) {
    $(window).scroll(function () {
        var position = $('.section-features').offset().top;
        var screenTop = $(document).scrollTop();
        if (screenTop >= position) {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    });

    $('.main-nav li').on("click", function () {
        var index = $(this).index();
        switch (index) {
            case 0:
                var target = $('.section-features').offset().top;
                $('body').animate({scrollTop:target}, '500');
                break;
            case 1:
                var target = $('.section-steps').offset().top;
                $('body').animate({scrollTop:target}, '500');
                break;
            case 2:
                var target = $('.section-cities').offset().top;
                $('body').animate({scrollTop:target}, '500');
                break;;
            case 3:
                var target = $('.section-form').offset().top;
                $('body').animate({scrollTop:target}, '500');
                break;
            
        }
    });

});
