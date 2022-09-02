<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.',
];

try {

    if(!isset($_POST['section_name_1']) || $_POST['section_name_1'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Section name 1 can not be empty.';
    }elseif (!isset($_POST['section_value_1']) || $_POST['section_value_1'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Section value 1 can not be empty.';
    }elseif (!isset($_POST['section_name_2']) || $_POST['section_name_2'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Section value 2 can not be empty.';
    }elseif (!isset($_POST['section_value_2']) || $_POST['section_value_2'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Section value 2 can not be empty.';
    }else{

        $stmt = $conn->prepare("UPDATE about SET {$_POST['section_name_1']}=?, {$_POST['section_name_2']}=?");
        $stmt->bind_param("ss", $_POST['section_value_1'],$_POST['section_value_2']);
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
