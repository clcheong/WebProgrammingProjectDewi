<?php 
require_once('../config/variable.php');
require_once('../config/db.php');
require_once('../config/functions.php');
?>
<?php 

if (isset($_POST['IconTitle'])){
 //echo " you have try to save ";
        $u=$_POST['IconName'];
        $n=$_POST['IconTitle'];
        $contents=$_POST['contents'];
        $sql ="INSERT INTO `services` (`IconName`, `IconTitle`, `contents`) 
        VALUES ('".$u."', '".$n."', '".$contents."')";  // sql insert command
//echo $sql;
        mysqli_select_db($conn,"dewi"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
        //mysqli_fetch_assoc($result); 
      goto2("viewservices.php"," Service is successfully Inserted");
} else {
  
?>
<form action="insertservices.php" method="POST">
    <label for="IconName">Icon :</label>
    <select name="IconName" id="IconName">
    <option value="0"> Select the Icon</option>
    <!-- repeat value taken from db -->
    <?php
  $sql ="SELECT * from icons";  // sql command
  mysqli_select_db($conn,"dewi"); ///select database as default
  $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql

   while( $rowcat=mysqli_fetch_assoc($result)) {   ?> 
    <option value="<?php echo $rowcat['IconName']; ?>"><?php echo $rowcat['IconName'];?></option>
    <?php } ?>
    </select ><br><br>
  <label for="IconTitle">Icon Title:</label>
  <input type="text"  id="IconTitle" name="IconTitle" ><br><br>
  <label for="contents"> Contents:</label><br>
  <textarea id="contents" name="contents" placeholder="Write something.." style="height:200px; width:500px"></textarea>
  <br><br>
  <input type="submit" value="Save">
</form>

<?php } ?>