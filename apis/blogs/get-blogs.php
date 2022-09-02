<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.',
];

try {
    $query = "";
    if(isset($_GET['limit'])){
        $query = "SELECT * FROM blogs LIMIT {$_GET['limit']}";
    }else{
        $query = "SELECT * FROM blogs";
    }

    $result = $conn->query($query);
    $blogs = [];
    while ($item = $result->fetch_assoc()){
        $query = "SELECT COUNT(id) FROM comments WHERE blog_id='{$item['id']}'";
        $count = $conn->query($query);
        $item['comments_count'] = $count->fetch_array()[0];
        $blogs[] = $item;
    }

    $output['flag'] = 1;
    $output['msg'] = 'success';
    $output['blogs'] = $blogs;
} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}
