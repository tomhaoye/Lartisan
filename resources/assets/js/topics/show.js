$(document).ready(function () {
    $('body').on('click', '.at-this-one', function () {
        $('#comment').append('@' + $(this).attr('data-name') + '\t');
    });
});