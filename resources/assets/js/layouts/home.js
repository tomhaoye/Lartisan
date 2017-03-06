$(function () {
    $('#cloud').tagCloud();

    var $container = $('#short_view');
    $container.imagesLoaded(function () {
        $container.masonry({
            itemSelector: '.water',
            isAnimated: true
        });
    });
});

