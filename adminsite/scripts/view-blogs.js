$(document).ready(function () {

    const ALL_BLOGS_URL = "http://localhost/practical_level_task_26/apis/blogs/get-blogs.php";
    let all_blogs_request = $.ajax({
        url: ALL_BLOGS_URL,
        method: "POST",
        data: {},
        dataType: "json"
    });

    all_blogs_request.done(function (data) {
        if (parseInt(data['flag']) === 1) {
            // alert( "Blog add: " + data);
            const blogs = data['blogs'];
            for (let i = 0; i < blogs.length; i++) {
                $('#blogs-table-body').append(buildTableRow(blogs[i]));
            }

        } else {
            alert("Request failed: " + data['msg']);
        }
    });

    all_blogs_request.fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus + '\n' + 'Refresh the page');
    });

});

function buildTableRow(blog) {
    const tr = $('<tr></tr>');

    const id = $('<td></td>');
    id.text(blog['id']);
    tr.append(id);

    const title = $('<td></td>');
    title.text(blog['title']);
    tr.append(title);

    const subtitle = $('<td></td>');
    subtitle.text(blog['subtitle']);
    tr.append(subtitle);

    const description = $('<td></td>');
    description.css({
        'max-width': '240px',
        'overflow': 'hidden',
        'text-overflow': 'ellipsis',
        'white-space': 'nowrap'
    });
    description.text(blog['description']);
    tr.append(description);

    const image = $('<td></td>');
    const imageLink = $('<a></a>');
    imageLink.addClass('btn');
    imageLink.addClass('btn-primary');
    imageLink.attr('href', blog['image_link']);
    imageLink.attr('target', '_blank');
    imageLink.text('View');
    image.append(imageLink);
    tr.append(image);

    const bloggerName = $('<td></td>');
    bloggerName.text(blog['blogger_name']);
    tr.append(bloggerName);

    const createdAt = $('<td></td>');
    createdAt.text(blog['created_at']);
    tr.append(createdAt);

    const action = $('<td></td>');
    action.addClass('text-nowrap');

    const editBtn = $('<button></button>');
    editBtn.addClass('mr-25');
    editBtn.attr('data-toggle', 'tooltip');
    editBtn.attr('data-original-title', 'Edit');
    editBtn.css({
        'background': 'none',
        'border': 'none',
        'color': 'black'
    });
    editBtn.click(function () {
        window.location.href = '../adminsite/add-blog.php?blog_id=' + blog['id'];
    });
    const editIcon = $('<i></i>');
    editIcon.addClass('fa');
    editIcon.addClass('fa-pencil');
    editIcon.addClass('text-inverse');
    editIcon.addClass('m-r-10');
    editBtn.append(editIcon);
    action.append(editBtn);

    const deleteBtn = $('<button></button>');
    deleteBtn.attr('data-toggle', 'tooltip');
    deleteBtn.attr('data-original-title', 'Close');
    deleteBtn.css({
        'background': 'none',
        'border': 'none',

    });
    deleteBtn.click(function () {
        deleteBlog(blog['id'],tr);
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


function deleteBlog(id,tr) {
    const DELETE_BLOG_URL = "http://localhost/practical_level_task_26/apis/blogs/delete-blog-by-id.php";
    let delete_blog_request = $.ajax({
        url: DELETE_BLOG_URL,
        method: "POST",
        data: {
            'blog_id': id
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