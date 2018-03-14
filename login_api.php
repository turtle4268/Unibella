<?php
require __DIR__. '/_db_connect.php';

// $result = array(
//         'success' => false,
// );

if(isset($_POST['email_login'])) {
    $email_login=$_POST['email_login'];
    $pass_login = sha1($_POST['password_login']); //破壞性加密

    $remember=isset($_POST['remember'])?$_POST['remember']:"";

    $sql = sprintf("SELECT `id`, `email`, `name`, `gender`, `mobile`, `birthday`, `address` FROM `members` 
        WHERE `email`='%s' AND `password`='%s'",
        $mysqli->escape_string($email_login),
        $pass_login
    );

    $result = $mysqli->query($sql);
    $msg_code=$result->num_rows;

    
    
    if($msg_code){
        $row = $result->fetch_assoc();
        $_SESSION['user'] = $row; // 登入記錄
        if($remember==1){
            $_SESSION['remember']=$_SESSION['user']['email'];
            $lovesql="SELECT * FROM `loves` WHERE `member_sid`={$_SESSION['user']['id']} ORDER BY `create_at` DESC";
            $loveresult = $mysqli->query($lovesql);
            while($loverow=$loveresult->fetch_assoc()){
                $_SESSION['love'][$loverow['product_sid']] = 1;
            }
        }else{
            unset($_SESSION['remember']);
        }   
    }

}
// echo $msg_code;
echo json_encode($msg_code, JSON_UNESCAPED_UNICODE);


