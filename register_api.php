<?php
require __DIR__. '/_db_connect.php';

// $result = array(
//         'success' => false,
//         'error' => '沒有給足夠的參數',
// );

if(isset($_POST['email'])) {
    $email=trim($_POST['email']);
    $pass = sha1($_POST['password']); //破壞性加密
    $name=trim($_POST['name']);
    $gender=trim($_POST['gender']);
    $mobile=trim($_POST['mobile']);
    $birthday=trim($_POST['birthday']);
    $address=trim($_POST['address']);

    $sql = "INSERT INTO `members`(
            `email`, `password`, `name`, 
            `gender`, `mobile`, 
            `birthday`, `address`, 
            `create_at`
            ) VALUES (
            ?, ?, ?,
            ?, ?,
            ?, ?,
             NOW())";

    $stmt = $mysqli->prepare($sql);
    //echo $mysqli->error; //除錯

    $stmt->bind_param('sssssss',
        $email, $pass, $name,
        $gender, $mobile,
        $birthday,
        $address
        
    );

    $stmt->execute();

    $msg_code = $stmt->affected_rows;
}

echo json_encode($msg_code, JSON_UNESCAPED_UNICODE);


