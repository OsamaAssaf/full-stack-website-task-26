$('#comment').submit(function () {

    const values = $('#comment').serializeArray();
    console.log(values);
    const SEND_COMMENT_URL = "http://localhost/practical_level_task_26/apis/blogs/send-comment.php";
    let comment_request = $.ajax({
        url: SEND_COMMENT_URL,
        method: "POST",
        data: {
            'name': values[0]['value'],
            'email': values[1]['value'],
            'subject': values[2]['value'],
            'comment': values[3]['value'],
            'blog_id': values[4]['value']
        },
        dataType: "json"
    });

    comment_request.done(function (data) {
        alert("Comment sent: " + data['msg']);
        $('#contact')[0].reset();
    });

    comment_request.fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
    });


    return false;
});