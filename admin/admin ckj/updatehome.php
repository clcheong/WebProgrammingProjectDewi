<?php 
require_once('../../config/variable.php');
require_once('../../config/db.php');
require_once('../../config/functions.php');
?>

<?php 

if (isset($_POST['title'])){
 //echo " you have try to save ";
        $u=$_GET['id'];
        $n=$_POST['title'];
        $header=$_POST['header'];
        $slogan=$_POST['slogan'];
        $content=$_POST['content'];
        $tool1=$_POST['tool1'];
        $tool2=$_POST['tool2'];
        $tool3=$_POST['tool3'];
        $tool4=$_POST['tool4'];
        $tool5=$_POST['tool5'];
        $tool6=$_POST['tool6'];
        $tool7=$_POST['tool7'];
        $startbutt=$_POST['startbutt'];
        $videobutt=$_POST['videobutt'];
        $Bgpic=$_POST['Bgpic'];
        $sql = "UPDATE `webtitle` SET `title`='".$n."', `header`='".$header."', `slogan`='".$slogan."', `content`='".$content."', `tool1`='".$tool1."', `tool2`='".$tool2."', `tool3`='".$tool3."', `tool4`='".$tool4."', `tool5`='".$tool5."', `tool6`='".$tool6."', `tool7`='".$tool7."', `startbutt`='".$startbutt."', `videobutt`='".$videobutt."', `Bgpic`='".$Bgpic."' WHERE (`id`='".$u."') LIMIT 1";  // sql command
    //echo $sql;
        mysqli_select_db($conn,"dewi"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
       goto2("viewhome.php"," Home is successfully updated");
} else {
    $u=$_GET['id'];
    $sql ="SELECT * FROM `webtitle` WHERE `id`='".$u."'";  // sql command
    mysqli_select_db($conn,"dewi"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
    $row=mysqli_fetch_assoc($result);
//echo $u;
?>
<form action="updatehome.php?id=<?php echo $u; ?>" method="POST">
  <label for="id">ID:</label>
  <input type="text" disabled id="id" name="id" value="<?php echo $u; ?>  "><br><br>

  <label for="title"> Title:</label>
  <input type="text" id="title" name="title" value="<?php echo $row['title'];?>"><br><br>

  <label for="header"> Header:</label>
  <input type="text" id="header" name="header" value="<?php echo $row['header'];?>"><br><br>

  <label for="slogan"> Slogan:</label>
  <input type="text" id="slogan" name="slogan" value="<?php echo $row['slogan'];?>"><br><br>

  <label for="content"> Content:</label>
  <input type="text" id="content" name="content" value="<?php echo $row['content'];?>"><br><br>

  <label for="tool1"> Tool1:</label>
  <input type="text" id="tool1" name="tool1" value="<?php echo $row['tool1'];?>"><br><br>

  <label for="tool2"> Tool2:</label>
  <input type="text" id="tool2" name="tool2" value="<?php echo $row['tool2'];?>"><br><br>

  <label for="tool3"> Tool3:</label>
  <input type="text" id="tool3" name="tool3" value="<?php echo $row['tool3'];?>"><br><br>

  <label for="tool4"> Tool4:</label>
  <input type="text" id="tool4" name="tool4" value="<?php echo $row['tool4'];?>"><br><br>

  <label for="tool5"> Tool5:</label>
  <input type="text" id="tool5" name="tool5" value="<?php echo $row['tool5'];?>"><br><br>

  <label for="tool6"> Tool6:</label>
  <input type="text" id="tool6" name="tool6" value="<?php echo $row['tool6'];?>"><br><br>

  <label for="tool7"> Tool7:</label>
  <input type="text" id="tool7" name="tool7" value="<?php echo $row['tool7'];?>"><br><br>

  <label for="startbutt"> StartButton:</label>
  <input type="text" id="startbutt" name="startbutt" value="<?php echo $row['startbutt'];?>"><br><br>

  <label for="videobutt"> VideoButton:</label>
  <input type="text" id="videobutt" name="videobutt" value="<?php echo $row['videobutt'];?>"><br><br>

  <label for="Bgpic"> Background:</label>
  <input type="text" id="Bgpic" name="Bgpic" value="<?php echo $row['Bgpic'];?>"><br><br>

  <p><input type="submit" value="Save"></p>
</form>

<?php } ?>