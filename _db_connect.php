<?php 
    $mysqli=new mysqli('localhost','root','','unibella');
    if($mysqli->connect_error){
        die("ERROR!:{$mysqli->connect_errno} {$mysqli->connect_error}");
    }
    $mysqli->query("SET NAMES 'UTF8'");

    if(! isset($_SESSION)){
        session_start();
    }
    date_default_timezone_set("Asia/Taipei");       //設定時區
?>