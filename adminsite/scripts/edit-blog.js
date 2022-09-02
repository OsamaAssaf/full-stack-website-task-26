$(document).ready(function (){
    $('#edit-blog-form').submit(function (){
        const EDIT_BLOG_URL = "http://localhost/practical_level_task_26/apis/blogs/edit-blog.php";
        let edit_blog_request = $.ajax({
            url: EDIT_BLOG_URL,
            method: "POST",
            data: {
                'blog_id':$('#blog_id').val(),
                'title': $('#blog_title').val(),
                'subtitle': $('#blog_subtitle').val(),
                'description': $('#blog_description').val(),
                'image_link': $('#blog_image').val(),
                'blogger_name': $('#blog_blogger_name').val()
            },
            dataType: "json"
        });

        edit_blog_request.done(function(data) {
            if(parseInt(data['flag']) === 1){
                alert( "Blog updated: " + data['msg']);
            }else{
                alert( "Request failed: " + data['msg'] );
            }
        });

        edit_blog_request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });
        return false;
    });


});


