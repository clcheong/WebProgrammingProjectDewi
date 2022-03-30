<?php

require_once 'functions.php';

session_start();

unset($_SESSION['username']);
unset($_SESSION['interface']);
unset($_SESSION['usertype']);
session_destroy();

goto2('../login.php',"You have logged out successfully.");

?>