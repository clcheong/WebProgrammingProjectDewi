<?php 
require_once('config/settings.php');
require_once('config/db.php');
require_once('config/functions.php');
?>

<?php 

if(isset($_GET['phoneNo'])){
       $phone = $_GET['phoneNo'];
       $email = $_GET['email'];
       $id = $_GET['contactid'];
       $sql = "INSERT INTO `tblcontact` (`ContactID`,`phone`, `email`) 
       VALUES ('".$id."','".$phone."', '".$email."')"; 
       mysqli_select_db($conn,"dewi"); 
       $result=mysqli_query($conn,$sql);  
     goto2("viewContact.php","New contact is successfully Inserted");
       
}?>