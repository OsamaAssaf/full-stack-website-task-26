<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.',
];

try {
    $query = "SELECT * FROM contact";
    $result = $conn->query($query);
    $contact = [];
    while ($item = $result->fetch_assoc()){
        $contact = $item;
    }

    $output['flag'] = 1;
    $output['msg'] = 'success';
    $output['contact'] = $contact;
} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}
