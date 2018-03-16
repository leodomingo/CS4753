$(function() {
    var $navbar = $('.navbar');
    $(window).scroll(function() {
        var scrollpos = $(window).scrollTop();
        var targetpos = $('.bottom-container')[0].offsetTop - 25;
        console.log(targetpos);
        if (scrollpos > targetpos) {
            if ($('.navbar').is(':hidden')) {
                $('.navbar').show();
            }
            $('.navbar').css({ "position": "fixed", "top": "0px", "left": 0, "width": "100%" });
        } else {
            $('.navbar').css({ "position": "relative", "width": "100%" });

        }
    });
    $('.top-button').click(function(ev) {
        ev.preventDefault();
        console.log("Clicked");
        $('html, body').animate({
            scrollTop: $("#homepage").offset().top - 200
        }, 500);
    });
    $('#signButton').click(function(ev) {
        ev.preventDefault();
        $('html, body').animate({
            scrollTop: $("#log-in").offset().top - 80
        }, 500);
    });
    $('#aboutButton').click(function(ev) {
        ev.preventDefault();
        $('html, body').animate({
            scrollTop: $("#about-us").offset().top - 100
        }, 500);
    });
    $('#contactButton').click(function(ev) {
        ev.preventDefault();
        $('html, body').animate({
            scrollTop: $("#contact-us").offset().top - 100
        }, 500);
    });
    $('#logButton').click(function(ev) {
        ev.preventDefault();
        $('html, body').animate({
            scrollTop: $("#log-in").offset().top - 80
        }, 500);
    });
    $('#homeButton').click(function(ev) {
        ev.preventDefault();
        $('html, body').animate({
            scrollTop: $("#homepage").offset().top - 80
        }, 500);
    });


});