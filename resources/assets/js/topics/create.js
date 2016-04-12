$(document).ready(function(){
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

});


