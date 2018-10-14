
$(document).ready(function(){
    $('.carousel').carousel({
        interval : 1000,
        width : 50%
    });
});

$(document).ready(function(){
    $('.parallax').parallax();
});

$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 800);
});