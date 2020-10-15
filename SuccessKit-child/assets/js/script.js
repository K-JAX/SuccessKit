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
        console.log('its bigger than 992px')
        if($('.header--fixed .container > #greenBttn')[0] == undefined){
            greenBttn.detach().appendTo('.header--fixed .container');
            
        }
    }else{
        console.log('its smaller than 992px')
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