<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.'
];

try {

    $query = "SELECT * FROM feedbacks";

    $result = $conn->query($query);

    $feedbacks = [];
    while ($item = $result->fetch_assoc()){
        $feedbacks[] = $item;
    }

    $output['flag'] = 1;
    $output['msg'] = 'success';
    $output['feedbacks'] = $feedbacks;

} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}


