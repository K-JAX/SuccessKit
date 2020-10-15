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