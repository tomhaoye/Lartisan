$(function(){
    $('#cloud').tagCloud();
});


$(document).ready(function(){
    animate();
    $(".play").click(animate).mouseover(function(){
        $(".play").css({"background-color":"#A55"});
    }).mouseout(function(){
        $(".play").css({"background-color":"#060"});
    });
});
function animate(){
    $('#fall>div>div').each(function(id){
        $(this).css({
            position: 'relative',
            top: '-200px',
            opacity: 0
        });
        var wait = Math.floor((Math.random()*3000)+1);
        $(this).delay(wait).animate({
            top: '0px',
            opacity: 1
        },1000);
    });
}