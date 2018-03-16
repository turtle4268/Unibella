<?php
session_start();

unset($_SESSION['user']);unset($_SESSION['love']);

header("Location: ./home.php");