$(document).ready(function()
{
    $(document).pjax('a:not(a[data-pjax="no-pjax"])', '#pjax-container');

    $(document).on('pjax:start', function() {
        NProgress.start();
    });
    $(document).on('pjax:end', function() {
        NProgress.done();
    });

    var height = $(window).height();
    $('#main_panel').css({'min-height':height});
});

$(document).ready(function(){
    var top = 300;
    $("#up_down").hide();
    $(function () {
        $(window).scroll(function(){
            if ($(window).scrollTop()>top){
                $("#up_down").fadeIn(500);
            }
            else
            {
                $("#up_down").fadeOut(500);
            }
        });
    });
});


$(".J_backtop").on('click', function(event) {
    event.preventDefault();

    $("html, body").animate({
        scrollTop: 0
    }, 300);
});


(function($) {
    $.expr[":"].Contains = function(a, i, m) {
        return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
    };
    function filterList(header, list) {
        //@header 头部元素
        //@list 无需列表
        //创建一个搜素表单
        var form = $("<form>").attr({
            "class":"filterform",
            action:"#"
        }), input = $("<input>").attr({
            "class":"filterinput",
            type:"text"
        });
        $(form).append(input).appendTo(header);
        $(input).change(function() {
            var filter = $(this).val();
            if (filter) {
                $matches = $(list).find("a:Contains(" + filter + ")").parent();
                $("li", list).not($matches).slideUp();
                $matches.slideDown();
            } else {
                $(list).find("li").slideDown();
            }
            return false;
        }).keyup(function() {
            $(this).change();
        });
    }
    $(function() {
        filterList($("#form"), $("#demo-list"));
    });
})(jQuery);


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
