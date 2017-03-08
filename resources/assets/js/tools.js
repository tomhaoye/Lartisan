imagehost = 'http://occ8rttz5.bkt.clouddn.com/';
/**
 * 初始化七牛上传
 * @param  which  img元素id
 * @param  img_id img元素id
 * @return void
 */
function initUpload(which, img_id) {
    Qiniu.uploader({
        runtimes: 'html5,flash,html4',
        browse_button: which + '_pick',
        container: which + '_container',
        max_file_size: '4mb',
        flash_swf_url: 'http://static.topfun10/qiniu/plupload/Moxie.swf',
        dragdrop: true,
        chunk_size: '4mb',
        multi_selection: false,
        filters: {
            mime_types: [
                {title: "Image files", extensions: "jpg,jpeg,gif,png"}
            ]
        },
        //uptoken_url: $('#uptoken_url').val(),
        uptoken: $('#uptoken').val(),
        domain: imagehost,
        //save_key: true,
        //unique_names: false,
        auto_start: true,
        init: {
            'FilesAdded': function (up, files) {
                plupload.each(files, function (file) {
                    $('#' + which + '_pick').show();
                    $('#' + which + '_pick').html("等待...");
                });
            },
            'BeforeUpload': function (up, file) {

            },
            'UploadProgress': function (up, file) {
                var chunk_size = plupload.parseSize(this.getOption('chunk_size'));
                $('#' + which + '_pick').html('正在上传... (' + file.percent + '%)');
            },
            'UploadComplete': function () {
                $('#' + which + '_pick').html('上传完成');
                setTimeout(function () {
                    $('#' + which + '_pick').html('upload image');
                }, 2000)
            },
            'FileUploaded': function (up, file, info) {
                var domain = up.getOption('domain');
                var res = JSON.parse(info);
                var sourceLink = domain + res.key + '?imageView2/1/w/80/h/80';
                $('#' + img_id).attr("src", sourceLink);
                $('#' + img_id).attr("data-name", res.key);
                $('#' + which + '_hidden').val(res.key);
                console.log(sourceLink);
                console.log(res.key);
            },
            'Error': function (up, err, errTip) {
                $('#' + which + '_pick').html(errTip);
            },
            'Key': function (up, file) {
                var now = new Date();
                var y = now.getFullYear();
                var m = now.getMonth() + 1;
                var d = now.getDate();
                var h = now.getHours();
                var min = now.getMinutes();
                var s = now.getSeconds();

                function n2(n) {
                    return (n < 10 ? '0' : '') + n;
                }

                var e = file.name.split('.').pop();
                var k = randomString(16);
                return [y, n2(m), n2(d), n2(h), n2(min), n2(s), k + '.' + e].join('-');
            }
        }
    });
}

function randomString(size) {
    size = size || 6;
    var code_string = 'abcdefghijklmnopqrstuvwxyz0123456789';
    var max_num = code_string.length + 1;
    var new_pass = '';
    while (size > 0) {
        new_pass += code_string.charAt(Math.floor(Math.random() * max_num));
        size--;
    }
    return new_pass;
}