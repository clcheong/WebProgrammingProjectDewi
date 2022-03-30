<?php 
require_once('../../config/variable.php');
require_once('../../config/db.php');
require_once('../../config/functions.php');
?>
<?php 

if (isset($_POST['title'])){
 //echo " you have try to save ";
        $u=$_POST['id'];
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
        $sql ="INSERT INTO `webtitle` (`id`, `title`, `header`, `slogan`, `content`, `tool1`, `tool2`, `tool3`, `tool4`, `tool5`, `tool6`, `tool7`, `startbutt`, `videobutt`, `Bgpic`) VALUES ('".$u."', '".$n."', '".$header."', '".$slogan."', '".$content."', '".$tool1."', '".$tool2."', '".$tool3."', '".$tool4."', '".$tool5."', '".$tool6."', '".$tool7."', '".$startbutt."', '".$videobutt."', '".$Bgpic."')";  // sql insert command
//echo $sql;
        mysqli_select_db($conn,"dewi"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
      goto2("viewhome.php "," home is successfully Inserted");
} else {
  
?>
<form action="inserthome.php" method="POST">
   
  <label for="id">ID:</label>
  <input type="text"  id="id" name="id" ><br><br>

 <label for="title"> Title:</label>
  <input type="text" id="title" name="title" ><br><br>

  <label for="header"> Header:</label>
  <input type="text" id="header" name="header" ><br><br>

  <label for="slogan"> Slogan:</label>
  <input type="text" id="slogan" name="slogan" ><br><br>

  <label for="content"> Content:</label>
  <input type="text" id="content" name="content" ><br><br>

  <label for="tool1"> Tool1:</label>
  <input type="text" id="tool1" name="tool1" ><br><br>

  <label for="tool2"> Tool2:</label>
  <input type="text" id="tool2" name="tool2" ><br><br>

  <label for="tool3"> Tool3:</label>
  <input type="text" id="tool3" name="tool3" ><br><br>

  <label for="tool4"> Tool4:</label>
  <input type="text" id="tool4" name="tool4" ><br><br>

  <label for="tool5"> Tool5:</label>
  <input type="text" id="tool5" name="tool5" ><br><br>

  <label for="tool6"> Tool6:</label>
  <input type="text" id="tool6" name="tool6" ><br><br>

  <label for="tool7"> Tool7:</label>
  <input type="text" id="tool7" name="tool7" ><br><br>

  <label for="startbutt"> StartButton:</label>
  <input type="text" id="startbutt" name="startbutt" ><br><br>

  <label for="videobutt"> VideoButton:</label>
  <input type="text" id="videobutt" name="videobutt" ><br><br>

  <label for="Bgpic"> Background:</label>
  <input type="text" id="Bgpic" name="Bgpic" ><br><br>

  <input type="submit" value="Save">
</form>

<?php } ?>