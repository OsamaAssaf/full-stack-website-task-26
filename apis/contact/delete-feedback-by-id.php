<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.',
];

try {

    if (!isset($_POST['feedback_id']) || $_POST['feedback_id'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Feedback id  can not be empty.';
    }else{
        $query = "DELETE FROM feedbacks WHERE id='{$_POST['feedback_id']}'";
        $result = $conn->query($query);

        $output['flag'] = 1;
        $output['msg'] = 'success';
    }


} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}
