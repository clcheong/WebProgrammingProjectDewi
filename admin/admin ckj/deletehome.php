<?php 
require_once('../../config/variable.php');
require_once('../../config/db.php');
require_once('../../config/functions.php');
?>

<?php 

if (isset($_GET['id'])){
 //echo " you have try to save ";
        $u=$_GET['id'];
      
        $sql ="DELETE FROM `webtitle` WHERE (`id`='".$u."')";  // sql command
        //echo $sql;
        mysqli_select_db($conn,"dewi"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       //mysqli_fetch_assoc($result); 
      goto2("viewhome.php"," Home is successfully deleted");
} 