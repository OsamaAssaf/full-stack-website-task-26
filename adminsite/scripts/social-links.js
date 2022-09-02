$(document).ready(function (){
    $('#social-links-form').submit(function (){
        const SET_SOCIAL_URL = "http://localhost/practical_level_task_26/apis/social-media/set-social-media-links.php";
        let ser_social_request = $.ajax({
            url: SET_SOCIAL_URL,
            method: "POST",
            data: {
                'facebook_link': $('#facebook_link').val(),
                'instagram_link': $('#instagram_link').val(),
                'twitter_link': $('#twitter_link').val()
            },
            dataType: "json"
        });

        ser_social_request.done(function(data) {
            if(parseInt(data['flag']) === 1){

                alert( "Links changed: " + data['msg'] );
            }else{
                alert( "Request failed: " + data['msg'] );

            }
        });

        ser_social_request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });

        return false;
    });


});


