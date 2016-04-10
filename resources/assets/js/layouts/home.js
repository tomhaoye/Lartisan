$(function(){
    $('#cloud').tagCloud();
});

$('#change_view').on('click',function(){
    var long = $('#long_view');
    var short = $('#short_view');
    if(long.hasClass('hidden')) {
        short.fadeOut();
        long.removeClass('hidden');
    }else{
        short.fadeIn();
        long.addClass('hidden');
    }
});