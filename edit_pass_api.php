<?php
require __DIR__. '/_db_connect.php';

if(!isset($_SESSION['user'])){
    header('Location:member_login.php');
    exit;
}

$result = array(
    'success' => false,
    'error' => '沒有給足夠的參數',
    'post' => $_POST,
);

if(!empty($_POST['oldpassword'])) {
    $oldpass = sha1($_POST['oldpassword']); //破壞性加密
    $pass = sha1($_POST['password']);
    $sql = "UPDATE `members` SET 
                `password`=?
                 WHERE `id`=? AND `password`=?"; 

    $stmt = $mysqli->prepare($sql);
    //echo $mysqli->error; //除錯

    $stmt->bind_param('sss',
        $pass,
        $_SESSION['user']['id'],
        $oldpass
        );

    $stmt->execute();
    
    $msg_code = $stmt->affected_rows;

    // if($msg_code==1) {
    //     $_SESSION['user']['name'] = $_POST['name'];
    //     $_SESSION['user']['gender'] = $_POST['gender'];
    //     $_SESSION['user']['mobile'] = $_POST['mobile'];
    //     $_SESSION['user']['birthday'] = $_POST['birthday'];
    //     $_SESSION['user']['address'] = $_POST['address'];

    //     $result['success'] = true;

    // } else {
    //     $result['error'] = '密碼錯誤或資料未變更';
    // }
}

echo json_encode($msg_code, JSON_UNESCAPED_UNICODE);


