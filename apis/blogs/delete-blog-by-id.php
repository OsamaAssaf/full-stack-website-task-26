<?php

require_once('../config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong.',
];

try {

    if (!isset($_POST['blog_id']) || $_POST['blog_id'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Blog is can not be empty.';
    }else{
        $query = "DELETE FROM blogs WHERE id='{$_POST['blog_id']}'";
        $result = $conn->query($query);

        $output['flag'] = 1;
        $output['msg'] = 'success';
    }


} catch (Exception $e) {

} finally {
    echo json_encode($output);
    $conn->close();
}
