<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.'
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        if(!isset($_POST['blog_id']) || $_POST['blog_id'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Blog id can not be empty.';
        }
        elseif(!isset($_POST['title']) || $_POST['title'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Title can not be empty.';
        }elseif (!isset($_POST['subtitle']) || $_POST['subtitle'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Subtitle can not be empty.';
        }elseif (!isset($_POST['description']) || $_POST['description'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Description can not be empty.';
        }elseif (!isset($_POST['image_link']) || $_POST['image_link'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Image link id can not be empty.';
        }elseif (!isset($_POST['blogger_name']) || $_POST['blogger_name'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Blogger name id can not be empty.';
        } else{

            $stmt = $conn->prepare("UPDATE blogs SET title=?, subtitle=?,description=?,image_link=?,blogger_name=? WHERE id=?");
            $stmt->bind_param("sssssi", $_POST['title'], $_POST['subtitle'], $_POST['description'],$_POST['image_link'],$_POST['blogger_name'],$_POST['blog_id']);

            $stmt->execute();
            $stmt->close();
            $output['flag'] = 1;
            $output['msg'] = 'success';
        }

    } catch (Exception $e) {

    } finally {
        echo json_encode($output);
        $conn->close();
    }


}


