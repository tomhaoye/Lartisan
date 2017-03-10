$(document).ready(function () {
    LARTISAN.initQiniuImg();

    $('#save_avatar').on('click', function () {
        $.ajax({
            url: '/users/id/update_avatar',
            data: {'avatar': $('#img').attr('data-name')},
            type: 'POST',
            success: function (data) {
                if (data.success) {

                }
            }
        });
    })
});


