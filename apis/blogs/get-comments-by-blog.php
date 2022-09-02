<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.',
];

try {
    if (isset($_GET['blog_id'])){
        $query = "SELECT * FROM comments WHERE blog_id='{$_GET['blog_id']}'";
        $result = $conn->query($query);
        $comments = [];
        while ($item = $result->fetch_assoc()){
            $comments[] = $item;
        }

        $output['flag'] = 1;
        $output['msg'] = 'success';
        $output['comments'] = $comments;
    }



} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}
