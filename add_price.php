<?php

// 加入商品, 移除商品, 查詢內容
// sid, qty

session_start();

// if(! isset($_SESSION['love'])){
//     $_SESSION['love'] = array();
// }

if(isset($_GET['tqty'])) $_SESSION['totalQty']=$_GET['tqty'];
if(isset($_GET['tprice'])) $_SESSION['totalPrice']=$_GET['tprice'];


echo json_encode($_SESSION['totalQty'],$_SESSION['totalPrice']);









