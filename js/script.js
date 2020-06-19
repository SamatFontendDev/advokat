jQuery( document ).ready(function($) {
    // слайдер на главной
    $('.reviews-list').slick({
        slidesToShow: 3,
        prevArrow: $('.arrow-wrap--prev'),
        nextArrow: $('.arrow-wrap--next'),
        responsive: [
            {
                breakpoint: 960,

                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 640,

                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    // модальное окно
    $('.button').click(function(){
        $('.overlay').fadeIn();
        $('.modal').fadeIn();
    });
    $('.close').click(function(){
        $(this).parent().fadeOut();
        $('.overlay').fadeOut();
    });
    $('.hamburger-menu').click(function(){
        $('.nav').addClass('nav--mobile');
        $('.nav-list').addClass('nav-list--active');
        $('.nav-close').addClass('nav-close--active');
    });
    $('.nav-close').click(function(){
        $('.nav').removeClass('nav--mobile');
        $('.nav-list').removeClass('nav-list--active');
        $('.nav-close').removeClass('nav-close--active');
    });
    // header link
    var timer;
    $('.nav-item--first').hover(
        function() {
            
            var $that = $(this);
            timer = setTimeout(function(){
                $that.addClass("active");
                $that.find('ul').finish().slideDown('fast');
            },300); // 1000 - одна секунда до срабатывания (изменить значение на своё)
        },
        function() {
            clearTimeout(timer);
            $(this).removeClass("active");
            $(this).find('ul').finish().slideUp('fast');
        }
    );

    new WOW().init();
});