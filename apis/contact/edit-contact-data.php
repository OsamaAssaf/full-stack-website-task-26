<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.',
];

try {

    if(!isset($_POST['phone']) || $_POST['phone'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Phone can not be empty.';
    }elseif(!isset($_POST['email']) || $_POST['email'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Email can not be empty.';
    }elseif(!isset($_POST['address']) || $_POST['address'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Address can not be empty.';
    }else{

        $stmt = $conn->prepare("UPDATE contact SET phone=?, email=?, address=?");
        $stmt->bind_param('sss',$_POST['phone'],$_POST['email'],$_POST['address']);
        $stmt->execute();

        $output['flag'] = 1;
        $output['msg'] = 'success';
        $stmt->close();
    }


} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}
