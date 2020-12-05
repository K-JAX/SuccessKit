// Success Kit Scripts
// Author: Kevin Garubba


$(function(){
    responsiveReposition();
});

function responsiveReposition(){
    reposition();
    $(window).on('resize', function(){ reposition(); })
}

function reposition(){
    var greenBttn = $('#greenBttn');
    if(largerThan(992)){
        if($('.header--fixed .container > #greenBttn')[0] == undefined){
            greenBttn.detach().appendTo('.header--fixed .container');
            
        }
    }else{
        if($('.header--fixed .navbar-collapse  #greenBttn')[0] == undefined){
            greenBttn.detach().appendTo('.header--fixed .navbar-collapse');
        }
    }
}

function largerThan( breakpoint ){
    if($(window).width() > breakpoint){
        return true;
    }else{
        return false;
    }

}

var checkExist = setInterval(function() {
    if ($('.leadinModal-theme-top').length) {
       $('body').addClass('hubspot-injected')
    }else if ( $('.leadinModal-theme-top').length == 0 && $('body').hasClass('hubspot-injected')){
        $('body').removeClass('hubspot-injected')
        clearInterval(checkExist);
    }

 }, 200);
 