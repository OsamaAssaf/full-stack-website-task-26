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
        }elseif (!isset($_POST['message']) || $_POST['message'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Message can not be empty.';
        } else{
            $query = "";
            if(!isset($_POST['subject']) || $_POST['subject'] === ''){
                $query = "INSERT INTO feedbacks (name,email,message) 
                            VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['message']}')";
            }else{
                $query = "INSERT INTO feedbacks (name,email,subject,message) 
                            VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['subject']}','{$_POST['message']}')";
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


