<?php

session_start();
if (isset($_SESSION['interface'])&&(isset($_SESSION['username']))){
    goto2($_SESSION['interface'],"Welcome to the Portal");

}



?>