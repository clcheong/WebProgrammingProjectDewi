<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
    require_once 'config/functions.php';
?>



<?php
    if(isset($_GET['id'])){
                
                $id = $_GET['id'];
        
                $sql = "DELETE FROM `dewi`.`about_boxes_tbl` WHERE `boxID` = '".$id."' LIMIT 1";
                mysqli_select_db($conn,"dewi");
                $result = mysqli_query($conn,$sql);
            
                goto2("viewAbout.php"," Box card is successfully deleted");
            }
?>
