<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.',
];

try {
    if (isset($_GET['blog_id'])) {
        $query = "SELECT * FROM blogs WHERE id='{$_GET['blog_id']}'";
        $result = $conn->query($query);
        $blog = [];
        while ($item = $result->fetch_assoc()) {
            $query = "SELECT COUNT(id) FROM comments WHERE blog_id='{$item['id']}'";
            $count = $conn->query($query);
            $item['comments_count'] = $count->fetch_array()[0];
            $blog = $item;
        }
        $output['flag'] = 1;
        $output['msg'] = 'success';
        $output['blog'] = $blog;
    }

} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}
