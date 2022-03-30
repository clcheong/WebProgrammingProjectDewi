<?php 
require_once('../config/variable.php');
require_once('../config/db.php');
require_once('../config/functions.php');
?>

<?php 

if (isset($_POST['teamid'])){
        $t=$_POST['teamid']; 
        $n = $_POST['name'];
        $sql ="UPDATE `team` SET `Name`='".$n."'
        WHERE (`TeamID`='".$t."') LIMIT 1"; 
        mysqli_select_db($conn,"dewi");
        $result=mysqli_query($conn,$sql);
       goto2("../viewTeams.php"," User is successfully updated");
}  
?>