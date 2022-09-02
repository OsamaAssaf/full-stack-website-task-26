$(document).ready(function (){
    $('#add-blog-form').submit(function (){
        const ADD_BLOG_URL = "http://localhost/practical_level_task_26/apis/blogs/new-blog.php";
        let add_blog_request = $.ajax({
            url: ADD_BLOG_URL,
            method: "POST",
            data: {
                'title': $('#blog_title').val(),
                'subtitle': $('#blog_subtitle').val(),
                'description': $('#blog_description').val(),
                'image_link': $('#blog_image').val(),
                'blogger_name': $('#blog_blogger_name').val()
            },
            dataType: "json"
        });

        add_blog_request.done(function(data) {
            if(parseInt(data['flag']) === 1){
                alert( "Blog add: " + data['msg']);
                $('#add-blog-form')[0].reset();
            }else{
                alert( "Request failed: " + data['msg'] );
            }
        });

        add_blog_request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });
        return false;
    });


});


