<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        if(!isset($_POST['website_title']) || $_POST['website_title'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Website title can not be empty.';
        }else{
            $query = "UPDATE header SET website_title = '{$_POST['website_title']}'";
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


