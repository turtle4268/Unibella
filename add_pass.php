<?php

session_start();

if(isset($_GET['seepass'])) $_SESSION['seepass']=$_GET['seepass'];
$pass=1;


echo json_encode($pass);









