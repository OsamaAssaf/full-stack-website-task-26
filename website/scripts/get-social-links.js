const SOCIAL_URL = "http://localhost/practical_level_task_26/apis/social-media/get-social-media-links.php";
let social_request = $.ajax({
    url: SOCIAL_URL,
    method: "POST",
    data: {},
    dataType: "json"
});

social_request.done(function(data) {

    if(parseInt(data['flag']) === 1){
        $('.social-icons li:first-child a').attr('href',data['social_links']['facebook']);
        $('.social-icons li:nth-child(2) a').attr('href',data['social_links']['twitter']);
        $('.social-icons li:last-child a').attr('href',data['social_links']['instagram']);
    }else{
        alert( "Request failed: " + data['msg'] );
    }
});

social_request.fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
});