//parallax
$(window).scroll(function(){
    var wScroll = $(this).scrollTop();

    //jumbotron

    $('.jumbotron h1').css({
        'transform' : 'translate(0px, '+ wScroll/4 +'%)'
    });
    
    $('.jumbotron p').css({
        'transform' : 'translate(0px, '+ wScroll/2 +'%)'
    });

    $('.input-group').css({
        'transform' : 'translate(0px, '+ wScroll/3 +'%)'
    });

    //daftar

    if(wScroll > $('.daftar').offset().top - 250){
        $('.daftar .thumbnail').each(function(i){
            setTimeout(function(){
                $('.daftar .thumbnail').eq(i).addClass('muncul');
            }, 300 * (i+1));
        });
        
    }

});