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
            var self = this;
            NProgress.done();
            self.pubu();
            self.markdown();
            self.prism();
        },

        tag: function () {
            $('#cloud').tagCloud();
        },

        markdown: function () {
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
        },

        pubu: function () {
            var $container = $('#short_view');
            $container.imagesLoaded(function () {
                $container.masonry({
                    itemSelector: '.water',
                    isAnimated: true,
                    isFitWidth: true
                });
            });
        },

        prism: function () {
            Prism.highlightAll();
        },

        initQiniuImg: function () {
            initUpload('img', 'img');
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
