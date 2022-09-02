$(document).ready(function (){
    $('#website-title-form').submit(function (){
        const SET_HEADER_URL = "http://localhost/practical_level_task_26/apis/header/set-header.php";
        let header_request = $.ajax({
            url: SET_HEADER_URL,
            method: "POST",
            data: {
                'website_title': $('#website_title').val()
            },
            dataType: "json"
        });

        header_request.done(function(data) {
            if(parseInt(data['flag']) === 1){

                alert( "Title changed: " + data['msg'] );
            }else{
                alert( "Request failed: " + data['msg'] );

            }
        });

        header_request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });

        return false;
    });


});


