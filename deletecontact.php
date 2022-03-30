<?php 
require_once('config/settings.php');
require_once('config/db.php');
require_once('config/functions.php');
?>

<?php 

if (isset($_GET['email'])){
 //echo " you have try to save ";
        $email=$_GET['email'];
      
        $sql ="DELETE FROM `tblcontact` 
        WHERE (`email`='".$email."') ";  // sql command
//echo $sql;
        mysqli_select_db($conn,"dewi"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
      goto2("viewContact.php"," Email is successfully Deleted");
} 
else if (isset($_GET['phone'])){
    //echo " you have try to save ";
           $phone=$_GET['phone'];
         
           $sql ="DELETE FROM `tblcontact` 
           WHERE (`phone`='".$phone."') ";  // sql command
   //echo $sql;
           mysqli_select_db($conn,"dewi"); ///select database as default
           $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
          // mysqli_fetch_assoc($result); 
         goto2("viewContact.php"," Phone Number is successfully Deleted");
   } 
