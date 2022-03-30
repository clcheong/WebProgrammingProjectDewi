<?php 
require_once('../config/variable.php');
require_once('../config/db.php');
require_once('../config/functions.php');
?>

<?php 

if (isset($_GET['IconName'])){
 //echo " you have try to save ";
        $u=$_GET['IconName'];
      
        $sql ="DELETE FROM `Services` WHERE (`IconName`='".$u."')";  // sql command
        //echo $sql;
        mysqli_select_db($conn,"dewi"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       //mysqli_fetch_assoc($result); 
      goto2("viewservices.php"," Service is successfully deleted");
} 