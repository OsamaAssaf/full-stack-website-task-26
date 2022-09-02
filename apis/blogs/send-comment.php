<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        if(!isset($_POST['name']) || $_POST['name'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Name can not be empty.';
        }elseif (!isset($_POST['email']) || $_POST['email'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Email can not be empty.';
        }elseif (!isset($_POST['comment']) || $_POST['comment'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Comment can not be empty.';
        }elseif (!isset($_POST['blog_id']) || $_POST['blog_id'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Blog id can not be empty.';
        } else{
            $query = "";
            if(!isset($_POST['subject']) || $_POST['subject'] === ''){
                $query = "INSERT INTO comments (name,email,comment,blog_id) 
                            VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['comment']}','{$_POST['blog_id']}')";
            }else{
                $query = "INSERT INTO comments (name,email,subject,comment,blog_id) 
                            VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['subject']}','{$_POST['comment']}','{$_POST['blog_id']}')";
            }
            $result = $conn->query($query);

            $output['flag'] = 1;
            $output['msg'] = 'success';
        }

    } catch (Exception $e) {

    } finally {
        echo json_encode($output);
        $conn->close();
    }


}


