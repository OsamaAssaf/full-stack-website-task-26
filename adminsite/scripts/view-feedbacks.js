$(document).ready(function () {

    const ALL_FEEDBACKS_URL = "http://localhost/practical_level_task_26/apis/contact/get-feedbacks.php";
    let all_feedbacks_request = $.ajax({
        url: ALL_FEEDBACKS_URL,
        method: "POST",
        data: {},
        dataType: "json"
    });

    all_feedbacks_request.done(function (data) {
        if (parseInt(data['flag']) === 1) {
            const feedbacks = data['feedbacks'];
            for (let i = 0; i < feedbacks.length; i++) {
                $('#feedbacks-table-body').append(buildTableRow(feedbacks[i]));
            }

        } else {
            alert("Request failed: " + data['msg']);
        }
    });

    all_feedbacks_request.fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus + '\n' + 'Refresh the page');
    });

});

function buildTableRow(feedback) {
    const tr = $('<tr></tr>');

    const id = $('<td></td>');
    id.text(feedback['id']);
    tr.append(id);

    const name = $('<td></td>');
    name.text(feedback['name']);
    tr.append(name);

    const email = $('<td></td>');
    email.text(feedback['email']);
    tr.append(email);

    const subject = $('<td></td>');
    subject.text(feedback['subject']);
    tr.append(subject);

    const message = $('<td></td>');
    message.css({
        'max-width': '240px',
        'overflow': 'hidden',
        'text-overflow': 'ellipsis',
        'white-space': 'nowrap'
    });
    message.text(feedback['message']);
    tr.append(message);

    const createdAt = $('<td></td>');
    createdAt.text(feedback['created_at']);
    tr.append(createdAt);

    const action = $('<td></td>');
    action.addClass('text-nowrap');


    const deleteBtn = $('<button></button>');
    deleteBtn.attr('data-toggle', 'tooltip');
    deleteBtn.attr('data-original-title', 'Close');
    deleteBtn.css({
        'background': 'none',
        'border': 'none',

    });
    deleteBtn.click(function () {
        deleteFeedback(feedback['id'],tr);
    });
    const deleteIcon = $('<i></i>');
    deleteIcon.addClass('fa');
    deleteIcon.addClass('fa-close');
    deleteIcon.addClass('text-danger');
    deleteBtn.append(deleteIcon);
    action.append(deleteBtn);

    tr.append(action);

    return tr;
}


function deleteFeedback(id,tr) {
    const DELETE_BLOG_URL = "http://localhost/practical_level_task_26/apis/contact/delete-feedback-by-id.php";
    let delete_blog_request = $.ajax({
        url: DELETE_BLOG_URL,
        method: "POST",
        data: {
            'feedback_id': id
        },
        dataType: "json"
    });

    delete_blog_request.done(function (data) {
        if (parseInt(data['flag']) === 1) {
            tr.remove();
        } else {
            alert("Request failed: " + data['msg']);

        }
    });

    delete_blog_request.fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);

    });
}