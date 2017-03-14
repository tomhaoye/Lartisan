$(document).ready(function () {
    $('body').on('click', '.at-this-one', function () {
        $('#content').append('@' + $(this).attr('data-name') + '\t');
    });
});