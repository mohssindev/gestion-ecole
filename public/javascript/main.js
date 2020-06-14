$(function () {
    var winH = $(window).height(),
    upperH = $('.upper-bar').innerHeight(),
    navH = $('.nav').innerHeight();

    $('.slider, .carousel-item, .student-area, .instructor-area, .admin-area, .faq-area').height(winH - (upperH + navH));

$('.nav > .nav-links > a').on('click', function () {

    $(this).addClass('active').siblings().removeClass('active');
});


});
