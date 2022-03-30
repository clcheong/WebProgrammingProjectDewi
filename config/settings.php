<?php

/*

$projectname = "WP Final Project";
$servername="localhost";
$user="root";
$passw="";
$portno="3306";
$database="dewi";

*/

require_once('variable.php');
require_once('db.php');
require_once('functions.php');
$id=1;

$title=retrieveHome($id,1);
$header=retrieveHome($id,2);
$slogan=retrieveHome($id,3);
$content=retrieveHome($id,4);
$tool1=retrieveHome($id,5);
$tool2=retrieveHome($id,6);
$tool3=retrieveHome($id,7);
$tool4=retrieveHome($id,8);
$tool5=retrieveHome($id,9);
$tool6=retrieveHome($id,10);
$tool7=retrieveHome($id,11);
$startbutt=retrieveHome($id,12);
$videobutt=retrieveHome($id,13);
$Bgpic=retrieveHome($id,14);

?>