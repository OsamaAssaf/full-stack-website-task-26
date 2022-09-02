<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        if(!isset($_POST['facebook_link']) || $_POST['facebook_link'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Facebook link can not be empty.';
        }elseif (!isset($_POST['instagram_link']) || $_POST['instagram_link'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Instagram link can not be empty.';
        }elseif (!isset($_POST['twitter_link']) || $_POST['twitter_link'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'Twitter link can not be empty.';
        } else{
            $query = "UPDATE social_media SET facebook = '{$_POST['facebook_link']}' ,instagram = '{$_POST['instagram_link']}',twitter = '{$_POST['twitter_link']}'";
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


