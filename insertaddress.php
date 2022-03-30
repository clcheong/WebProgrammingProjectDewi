<?php 
require_once('config/settings.php');
require_once('config/db.php');
require_once('config/functions.php');
?>

<?php 

if(isset($_GET['adr'])){
      
       $adr = $_GET['adr'];
       $id = $_GET['adrid'];
       $sql = "INSERT INTO `tbladdress` (`AddressID`,`Address`) 
       VALUES ('".$id."','".$adr."')"; 
       mysqli_select_db($conn,"dewi"); 
       $result=mysqli_query($conn,$sql);  
     goto2("viewContact.php","Address is successfully Inserted");
       
}?>