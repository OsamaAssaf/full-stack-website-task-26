<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.'
];

try {

    $query = "SELECT website_title FROM header";
    $result = $conn->query($query);

    $output['flag'] = 1;
    $output['msg'] = 'success';
    $output['title'] = $result->fetch_assoc()['website_title'];
} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}
