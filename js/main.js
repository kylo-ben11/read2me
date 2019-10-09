$(document).ready(function () {

    $(".hamburger").click(function () {
        $(this).toggleClass("is-active");
    });
    $(".hamburger").click(function () {
        $('.nav-panel').toggleClass("open");
    });
    $('.play-pause').on('click', function () {
        $('.left-side').toggleClass("playing");
    })


    var aud = $('audio')[0];

    $('.play-pause').on('click', function () {

        if (aud.paused) {
            aud.play();
            $('.play-pause').removeClass('icon-play');
            $('.play-pause').addClass('icon-stop');
        } else {
            aud.pause();
            $('.play-pause').removeClass('icon-stop');
            $('.play-pause').addClass('icon-play');
        }
    })
    aud.ontimeupdate = function () {
        $('.progress').css('width', aud.currentTime / aud.duration * 100 + '%')
    }


});