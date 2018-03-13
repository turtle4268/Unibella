<?php

// 加入商品, 移除商品, 查詢內容
// sid, qty

session_start();

if(! isset($_SESSION['love'])){
    $_SESSION['love'] = array();
}

if(isset($_GET['sid'])) {
    // 檢查商品的資料表有沒有這個商品

    $sid = intval($_GET['sid']); //商品的 sid

    $_SESSION['love'][$sid] = 1;
}

echo json_encode($_SESSION['love']);









