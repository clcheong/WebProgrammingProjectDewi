<?php
    require_once("functions.php");
    session_start();

    if(isset($_SESSION['username'])){

    }

    else{
        goto2("login.php","Please log on before using");
    }

?>