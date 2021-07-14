// Require Files
require('./bootstrap');

require('alpinejs');

// Toggle Mobile Hamburger Menu
$( document ).ready(function() {
    $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing");
    });
});

// Toggle Scrolling Effect
$(window).on("scroll", function() {
    if($(window).scrollTop()) {
        $('nav').addClass('scroll');
    }
    else {
        $('nav').removeClass('scroll');
    }
})
