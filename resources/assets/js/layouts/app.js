$(document).ready(function()
{
    $(document).pjax('a:not(a[data-pjax="no-pjax"])', '#pjax-container');

    $(document).on('pjax:start', function() {
        NProgress.start();
    });
    $(document).on('pjax:end', function() {
        NProgress.done();
    });
});


$(".J_backtop").on('click', function(event) {
    event.preventDefault();

    $("html, body").animate({
        scrollTop: 0
    }, 300);
});



/*
var wsServer = 'ws://192.168.43.134:9502';
var websocket = new WebSocket(wsServer);
websocket.onopen = function (evt) {
    console.log("Connected to WebSocket server.");
};

websocket.onclose = function (evt) {
    console.log("Disconnected");
};

websocket.onmessage = function (evt) {
    console.log('Retrieved data from server: ' + evt.data);
    $('#message').append("\n"+evt.data+'\n');
};

websocket.onerror = function (evt, e) {
    console.log('Error occured: ' + evt.data);
};

$('#send').on('click', function () {
    var say = $('#say').val();
    websocket.send(say);
});*/
