$(document).ready(function() {
    if($(window).width() < 481) {
        $('img').removeClass('img-fluid cover-img');
        $('img').addClass('mobile-img');
    }
});