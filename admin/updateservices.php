<?php 
require_once('../config/variable.php');
require_once('../config/db.php');
require_once('../config/functions.php');
?>

<?php 

if (isset($_POST['IconTitle'])){
 //echo " you have try to save ";
        $u=$_GET['IconName'];  /*error  type="text" disabled*/
        $n=$_POST['IconTitle'];
        $contents=$_POST['contents'];
        $sql ="UPDATE `Services` SET `IconTitle`='".$n."', `contents`='".$contents."' WHERE (`IconName`='".$u."') LIMIT 1";  // sql command
    //echo $sql;
        mysqli_select_db($conn,"dewi"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
       goto2("viewservices.php"," Services is successfully updated");
} else {
    $u=$_GET['IconName'];
    $sql ="SELECT * FROM `Services` WHERE `IconName`='".$u."'";  // sql command
    mysqli_select_db($conn,"dewi"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
    $row=mysqli_fetch_assoc($result);
//echo $u;
?>
<form action="updateservices.php?IconName=<?php echo $u; ?>" method="POST">
  <label for="Icon"><div class="icon-box">
              <i class="bi bi-<?php echo $row['IconName']; ?>"></i></label>
  <input type="text" disabled id="IconName" name="IconName" value="<?php echo $u; ?>  "><br><br>
  <label for="IconTitle"> Icon Title:</label>
  <input type="text" id="IconTitle" name="IconTitle" value="<?php echo $row['IconTitle'];?>"><br><br>

  <label for="contents"> Contents:</label><br>
  <textarea id="contents" name="contents" placeholder="Write something.." style="height:200px; width: 500px"><?php echo $row['contents'];?></textarea><br><br>
</form>
<p><input type="submit" value="Save"></p>
<?php } ?>