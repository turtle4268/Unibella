<?php

// 加入商品, 移除商品, 查詢內容
// sid, qty

session_start();

// if(! isset($_SESSION['love'])){
//     $_SESSION['love'] = array();
// }

$discount=(isset($_GET['discount'])) ? floatval($_GET['discount']) : 1;
$_SESSION['discount']=$_GET['discount'];
$ship=(isset($_GET['ship'])) ? intval($_GET['ship']) : 0;
$oldprice=intval($_SESSION['totalPrice']);
$newprice=$oldprice*(1-$discount)+$ship;

$_SESSION['newprice']=$newprice;

echo json_encode($_SESSION['newprice']);









