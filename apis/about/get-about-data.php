<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.',
];

try {
    $query = "SELECT * FROM about";
    $result = $conn->query($query);
    $about = [];
    while ($item = $result->fetch_assoc()){
        $about = $item;
    }

    $output['flag'] = 1;
    $output['msg'] = 'success';
    $output['about'] = $about;
} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}
