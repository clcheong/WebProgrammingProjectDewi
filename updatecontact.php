<?php 
require_once('config/settings.php');
require_once('config/db.php');
require_once('config/functions.php');
?>

<?php 

if (isset($_GET['phoneNo'])){

        $id = $_GET['contactid'];
        $phone=$_GET['phoneNo'];  //error  type="text" disabled 
        $sql ="UPDATE `tblcontact` SET `phone`='".$phone."' 
        WHERE (`ContactID`='".$id."') LIMIT 1";  // sql command

        mysqli_select_db($conn,"dewi"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql 
       goto2("viewContact.php"," Phone is successfully updated");
} 
else if(isset($_GET['email'])){
    $e=$_GET['email'];  //error  type="text" disabled 
    $id = $_GET['contactid'];
    $sql ="UPDATE `tblcontact` SET `email`='".$e."' 
    WHERE (`ContactID`='".$id."') LIMIT 1";  // sql command
//echo $sql;
    mysqli_select_db($conn,"dewi"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql 
   goto2("viewContact.php"," Email is successfully updated");
}
?>