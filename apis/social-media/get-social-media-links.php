<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.',
];

try {

    $query = "SELECT * FROM social_media";
    $result = $conn->query($query);
    $social_links = [];
    while ($item = $result->fetch_assoc()){
        $social_links = $item;
    }

    $output['flag'] = 1;
    $output['msg'] = 'success';
    $output['social_links'] = $social_links;
} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}
