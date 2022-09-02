

$('#contact').submit(function (){
    const values = $('#contact').serializeArray();
    const FEEDBACK_URL = "http://localhost/practical_level_task_26/apis/contact/send-feedback.php";
    let feedback_request = $.ajax({
        url: FEEDBACK_URL,
        method: "POST",
        data: {
            'name':values[0]['value'],
            'email':values[1]['value'],
            'subject':values[2]['value'],
            'message':values[3]['value'],
        },
        dataType: "json"
    });

    feedback_request.done(function(data) {
        alert( "Feedback sent: " + data['msg']);
        $('#contact')[0].reset();
    });

    feedback_request.fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
    });


    return false;
});