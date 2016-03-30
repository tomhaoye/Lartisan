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
});