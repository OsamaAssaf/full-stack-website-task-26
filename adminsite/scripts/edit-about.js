$(document).ready(function (){

    editImageSection();
    for(let i = 1 ; i <= 9 ; i++){
        let formId = 'section-' + i.toString() + '-form';
        let titleId = 'title_' + i.toString();
        let descriptionId = 'description_' + i.toString();
        $('#' + formId).submit(function (){
            const EDIT_ABOUT_URL = "http://localhost/practical_level_task_26/apis/about/edit-about-data.php";
            let edit_about_request = $.ajax({
                url: EDIT_ABOUT_URL,
                method: "POST",
                data: {
                    'section_name_1':titleId,
                    'section_value_1': $('#' + titleId).val(),
                    'section_name_2':descriptionId,
                    'section_value_2': $('#' + descriptionId).val()
                },
                dataType: "json"
            });

            edit_about_request.done(function(data) {
                if(parseInt(data['flag']) === 1){
                    alert( "Section updated: " + data['msg']);
                }else{
                    alert( "Request failed: " + data['msg'] );
                }
            });

            edit_about_request.fail(function( jqXHR, textStatus ) {
                alert( "Request failed: " + textStatus );
            });
            return false;
        });
    }

});


function editImageSection(){
    $('#image-form').submit(function (){
        const EDIT_ABOUT_URL = "http://localhost/practical_level_task_26/apis/about/edit-about-data.php";
        let edit_about_request = $.ajax({
            url: EDIT_ABOUT_URL,
            method: "POST",
            data: {
                'section_name_1':'image_link',
                'section_value_1': $('#image_link').val(),
                'section_name_2':'image_description',
                'section_value_2': $('#image_description').val()
            },
            dataType: "json"
        });

        edit_about_request.done(function(data) {
            if(parseInt(data['flag']) === 1){
                alert( "Section updated: " + data['msg']);
            }else{
                alert( "Request failed: " + data['msg'] );
            }
        });

        edit_about_request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });
        return false;
    });
}


