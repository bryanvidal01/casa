$(document).ready(function(){

    $(".image-follow").mousemove(function(event){
        var el = $(this);
        var relX = event.pageX - $(this).offset().left + 30;
        var relY = event.pageY - $(this).offset().top;

        el.find('.follow-image').fadeIn(100);
        el.find('.follow-image').css({left: relX, top: relY})
    });

    const slider = $('.slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        slidesToScroll: 3,
        focusOnSelect: true,
        dots: true,
        draggable: false
    });

});


$(window).ready(function () {
    $('.button-round').mouseleave(function(e){
        var el = $(this);
        TweenMax.to(this, 0.3, {scale: 1});
        TweenMax.to(el, 0.3,{scale:1, x: 0, y: 0});
    });

    $('.button-round').mouseenter(function(e){
        TweenMax.to(this, 0.3, {transformOrigin: '0 0', scale: 1});
    });

    $('.button-round').mousemove(function(e){
        var el = $(this);
        callParallax(e, el);
    });

    function callParallax(e, el){
        parallaxIt(e, el, 60);
        parallaxIt(e, el, 40);
    }

    function parallaxIt(e, target, movement){
        var $this = target;
        var boundingRect = $this[0].getBoundingClientRect();
        var relX = e.pageX - boundingRect.left;
        var relY = e.pageY - boundingRect.top;
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        TweenMax.to(target, 0.3, {
            x: (relX - boundingRect.width/2) / boundingRect.width * movement,
            y: (relY - boundingRect.height/2 - scrollTop) / boundingRect.width * movement,
            ease: Power2.easeOut
        });
    }


    // Select Theme

    $('#theme').change(function(){
       var el = $(this);

        if(el.is(":checked")) {
            $('body').addClass('dark-theme');
        }else{
            $('body').removeClass('dark-theme');
        }
    });

    // Navigation
    function scrollToAnimate(scrollTo){
        $("html, body").stop().animate({scrollTop:scrollTo}, 100, 'swing');
    }

    $('button.navigation').click(function(){
        if(!$('body').hasClass('navigation-open')){
            scrollToAnimate(0);

            setTimeout(function(){
                $('body').addClass('navigation-open');
            }, 100);
        }else{
            $('body').removeClass('navigation-open');
        }
    })


    // Loader
    var loaderContainer = $('.loader-container');
    var loaderMasque = loaderContainer.find('.masque');
    var loaderValue = loaderContainer.find('.percent-number');
    var startValue = 0;


    var intervalLoad = setInterval(function(){
        if(startValue >= 78){
            clearTimeout(intervalLoad);
        }

        document.getElementById('percent-load').innerHTML = startValue;

        $('#masque').css('transform', 'translate('+startValue +'%, 0)');

        startValue = startValue + 3;
    }, 100);


    $(window).on('load', function () {

        clearTimeout(intervalLoad);

        document.getElementById('percent-load').innerHTML = 100;
        $('#masque').css('transform', 'translate(100%, 0)');

        setTimeout(function(){
            $('.loader-container').fadeOut();
        }, 400);
    });


    // Animations

    

});






