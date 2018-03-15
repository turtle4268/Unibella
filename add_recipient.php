<?php

// 加入商品, 移除商品, 查詢內容
// sid, qty

session_start();

// if(! isset($_SESSION['love'])){
//     $_SESSION['love'] = array();
// }

if(isset($_GET['repepole'])) $_SESSION['repepole']=$_GET['repepole'];
if(isset($_GET['rephone'])) $_SESSION['rephone']=$_GET['rephone'];


echo json_encode($_SESSION['repepole'],$_SESSION['rephone']);









