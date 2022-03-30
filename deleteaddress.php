<?php 
require_once('config/settings.php');
require_once('config/db.php');
require_once('config/functions.php');
?>

<?php 

if (isset($_GET['AddressID'])){
 //echo " you have try to save ";
        $id=$_GET['AddressID'];
      
        $sql ="DELETE FROM `tbladdress` 
        WHERE (`AddressID`='".$id."') ";  // sql command
//echo $sql;
        mysqli_select_db($conn,"dewi"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
      goto2("viewContact.php"," Address is successfully Deleted");
} 
