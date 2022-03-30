<?php


require_once("settings.php");


$conn=new mysqli($servername,$user,$passw);


if (!$conn){ 
    die("Connection failed".mysqli_connect_error());
}
?>
