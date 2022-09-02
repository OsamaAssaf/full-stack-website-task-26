const HEADER_URL = "http://localhost/practical_level_task_26/apis/header/get-header.php";
let header_request = $.ajax({
    url: HEADER_URL,
    method: "POST",
    data: {},
    dataType: "json"
});

header_request.done(function(data) {
    if(parseInt(data['flag']) === 1){
        $('#header-text').html(data['title'] + ' <em>.</em>');
    }else{
        alert( "Request failed: " + data['msg'] );
    }
});

header_request.fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
});