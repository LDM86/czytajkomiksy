var $mobile = $('#mobile');
var $mobilenav = $('.nav--mobile');
var $body = $('body');

$mobilenav.on('click', function() {
    if ($mobile.hasClass('active')) {
        $mobilenav.removeClass('open');
        $body.removeClass('lock');
        $mobile.slideUp(300, function() {
            $mobile.removeClass('active');

        });
    } else {
        $mobile.slideDown(300, function() {
            $mobile.addClass('active');
        });
        $mobilenav.addClass('open');
        $body.addClass('lock');
    }
    $win.on("click.Bst", function(event) {
        if ($mobilenav.has(event.target).length == 0 && !$mobilenav.is(event.target) && $mobile.has(event.target).length == 0 && !$mobile.is(event.target)) {
            $mobile.slideUp(300, function() {
                $mobile.removeClass('active');
            });
            $mobilenav.removeClass('open');
            $body.removeClass('lock');
        }
    });
});

var $win = $(window);
var $search_body = $('.search-form--body');
var $search_link = $('.search-form__link');

$search_link.on('click', function() {
    if ($search_body.hasClass('active')) {
        $search_link.removeClass('open');
        $search_body.slideUp(300, function() {
            $search_body.removeClass('active');

        });
    } else {
        $search_body.slideDown(300, function() {
            $search_body.addClass('active');
        });
        $search_link.addClass('open');
    }
    $win.on("click.Bst", function(event) {
        if ($search_link.has(event.target).length == 0 && !$search_link.is(event.target) && $search_body.has(event.target).length == 0 && !$search_body.is(event.target)) {
            $search_body.slideUp(300, function() {
                $search_body.removeClass('active');
            });
            $search_link.removeClass('open');
        }
    });
});

jQuery(document).ready(function($) {
    $('.wp-block-image figure img').each(function() {
        if($(this).attr('width') >= 1000) {
            $(this).parent().addClass('size-large');
        }
    });
});

function SocialShare(url){
    window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
    return true;
}

function CopyLink(){
    var $temp = $("<input>");
        var $url = $(location).attr('href');
        $("body").append($temp);
        $temp.val($url).select();
        document.execCommand("copy");
        $('.tooltip__text').addClass('active');
        setTimeout(function() {
            $('.tooltip__text').removeClass('active');
        }, 500);
        $temp.remove();
    return true;
}

var $accordion = $('.accordion');

    $accordion.on('click', function() {
        if($(this).next().hasClass('active')) {
            $(this).next().removeClass('active');
            $(this).removeClass('active');
        } else {
            $(this).next().addClass('active');
            $(this).addClass('active');
        }  
    });