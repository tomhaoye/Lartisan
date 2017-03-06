(function ($) {
    var LARTISAN = {
        init: function () {
            var self = this;

            $(document).pjax('a:not(a[data-pjax="no-pjax"])', '#pjax-container');

            $(document).on('pjax:start', function () {
                NProgress.start();
            });
            $(document).on('pjax:end', function () {
                self.siteBoot();
            });
        },

        siteBoot: function () {
            NProgress.done();

            //tag
            $('#cloud').tagCloud();

            //pubuliu
            var $container = $('#short_view');
            $container.imagesLoaded(function () {
                $container.masonry({
                    itemSelector: '.water',
                    isAnimated: true
                });
            });

            //markdown
            $('#create_content').keyup(function () {
                parse();
            });
            function parse() {
                var content = $("#create_content");
                var val = content.val();

                if (val) {
                    marked(val, function (err, content) {
                        $('#markdown_content').html(content);
                    });
                }
            }

            //prism
            Prism.highlightAll();
        }
    };
    window.LARTISAN = LARTISAN;
})(jQuery);

$(document).ready(function () {
    LARTISAN.init();

    var height = $(window).height();
    $('#main_panel').css({'min-height': height});
});


$('#up_down').on('click', function () {
    event.preventDefault();
    $("html, body").animate({
        scrollTop: 0
    }, 300);
});

$(document).ready(function () {
    var top = 300;
    $("#up_down").hide();
    $(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() > top) {
                $("#up_down").fadeIn(500);
            }
            else {
                $("#up_down").fadeOut(500);
            }
        });
    });
});


(function ($) {
    $.expr[":"].Contains = function (a, i, m) {
        return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
    };
    function filterList(header, list) {
        //@header 头部元素
        //@list 无需列表
        //创建一个搜素表单
        var form = $("<form>").attr({
            "class": "filterform",
            action: "#"
        }), input = $("<input>").attr({
            "class": "filterinput",
            type: "text"
        });
        $(form).append(input).appendTo(header);
        $(input).change(function () {
            var filter = $(this).val();
            if (filter) {
                $matches = $(list).find("a:Contains(" + filter + ")").parent();
                $("li", list).not($matches).slideUp();
                $matches.slideDown();
            } else {
                $(list).find("li").slideDown();
            }
            return false;
        }).keyup(function () {
            $(this).change();
        });
    }

    $(function () {
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
