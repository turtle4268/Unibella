<?php
session_start();

unset($_SESSION['user']);unset($_SESSION['love']);unset($_SESSION['cart']);
// session_destroy();

header("Location: ./home.php");