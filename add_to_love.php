<?php
require __DIR__. '/_db_connect.php';

if(!isset($_SESSION['user'])){
    exit;
}

if(isset($_GET['sid'])){
    $member_sid=$_SESSION['user']['id'];
    $product_sid=$_GET['sid'];

    $sql="INSERT INTO `loves`(
        `member_sid`, `product_sid`, 
        `create_at`
        ) VALUES (
        ?, ?,
        NOW())";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ss',
            $member_sid, $product_sid      
    );
    $stmt->execute();

    $msg_code = $stmt->affected_rows;
    if($msg_code){
        $_SESSION['love'][$product_sid] = 1;
    }
}

echo json_encode($msg_code, JSON_UNESCAPED_UNICODE);









