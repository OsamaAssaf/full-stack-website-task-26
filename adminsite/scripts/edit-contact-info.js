$(document).ready(function () {


    $('#edit-contact-form').submit(function () {
        const EDIT_CONTACT_URL = "http://localhost/practical_level_task_26/apis/contact/edit-contact-data.php";
        let edit_contact_request = $.ajax({
            url: EDIT_CONTACT_URL,
            method: "POST",
            data: {
                'phone': $('#phone').val(),
                'email': $('#email').val(),
                'address': $('#address').val()
            },
            dataType: "json"
        });

        edit_contact_request.done(function (data) {
            if (parseInt(data['flag']) === 1) {
                alert("Section updated: " + data['msg']);
            } else {
                alert("Request failed: " + data['msg']);
            }
        });

        edit_contact_request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
        return false;
    });


});





