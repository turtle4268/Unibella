<?php

session_start();

$pass=(isset($_GET['seepass'])) ? $pass=$_GET['seepass'] :"";
$code=0;
if($pass=="guava"){
    $_SESSION['seepass']=1;
   $code=1; 
}else{
    $code=0;
}



echo json_encode($code);









