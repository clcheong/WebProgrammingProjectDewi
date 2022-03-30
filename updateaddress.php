<?php 
require_once('config/settings.php');
require_once('config/db.php');
require_once('config/functions.php');
?>

<?php 

if (isset($_GET['adrid'])){

        $id = $_GET['adrid'];
        $address=$_GET['adr'];  //error  type="text" disabled 
        $sql ="UPDATE `tbladdress` SET `Address`='".$address."' 
        WHERE (`AddressID`='".$id."') LIMIT 1";  // sql command

        mysqli_select_db($conn,"dewi"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql 
       goto2("viewContact.php"," Address is successfully updated");
} 

?>