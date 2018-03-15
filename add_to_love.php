<?php
require __DIR__. '/_db_connect.php';

if(!isset($_SESSION['user'])){
    exit;
}

if(isset($_GET['sid'])){
    
    $member_sid=$_SESSION['user']['id'];
    $product_sid=$_GET['sid'];
    $result=0;
    if(!isset($_SESSION['love'][$product_sid])){
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
            $result=1;
        }
        $stmt->close();
    }else{
        $dsql="DELETE FROM `loves` WHERE `member_sid`=? AND `product_sid`=?";
        $dstmt = $mysqli->prepare($dsql);
        $dstmt->bind_param('ss',
                $member_sid, $product_sid      
        );
        $dstmt->execute();
    
        $dmsg_code = $dstmt->affected_rows;
        if($dmsg_code){
            unset($_SESSION['love'][$product_sid]);
            $result=2;
        }
        $dstmt->close();
    }

    // echo $result;
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);









