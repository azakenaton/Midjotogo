
$(document).ready(function(){
    $('.carousel').carousel();
    $('.parallax').parallax();
});

$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 800);
});

$('div').scrollspy({ target: '#navbar-scroll' });