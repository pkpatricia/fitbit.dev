jQuery( document ).ready( function( $ ) {

    $(document).ready(function () {
        $(".cont").hide();
        $(".toggle-nav").click(function (e) {
            $(this).toggleClass('active');
            $('.menu ul').toggleClass('active');
            e.preventDefault();
        });
    });


    $(window).resize(function() {
        var max = 600;

        if ($(window).width() >= max )
        {
            $("#dot").mouseleave(function () {
                $(".cont").hide();
                $("#dot").stop().animate({width: '20em', height: '20em'}, 1000, 'easeOutSine');
            });
            $("#dot").mouseenter(function () {
                $(".cont").show();
                $("#dot").stop().animate({width: '30em', height: '30em'}, 3000, 'easeInSine');
            });
        }

        else {

            $("#dot").mouseleave(function () {
                $(".cont").hide();
                $("#dot").stop().animate({width: '20em', height: '20em'}, 1000, 'easeOutSine');
            });
            $("#dot").mouseenter(function () {
                $(".cont").hide();
                $("#dot").stop().animate({width: '20em', height: '20em'}, 1000, 'easeInSine');
            });

        }

    });


    $(document).ready(function(){
        var max = 600;

        if ($(window).width() >= max )
        {
            $("#dot").mouseleave(function () {
                $(".cont").hide();
                $("#dot").stop().animate({width: '20em', height: '20em'}, 1000, 'easeOutSine');
            });
            $("#dot").mouseenter(function () {
                $(".cont").show();
                $("#dot").stop().animate({width: '30em', height: '30em'}, 3000, 'easeInSine');
            });
        }

        else {

            $("#dot").mouseleave(function () {
                $(".cont").hide();
                $("#dot").stop().animate({width: '20em', height: '20em'}, 1000, 'easeOutSine');
            });
            $("#dot").mouseenter(function () {
                $(".cont").hide();
                $("#dot").stop().animate({width: '20em', height: '20em'}, 1000, 'easeInSine');
            });

        }
    });

});





