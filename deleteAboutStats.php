<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
    require_once 'config/functions.php';
?>



<?php
    if(isset($_GET['id'])){
                
                $id = $_GET['id'];
        
                $sql = "DELETE FROM `dewi`.`about_stats_tbl` WHERE `id` = '".$id."' LIMIT 1";
                mysqli_select_db($conn,"dewi");
                $result = mysqli_query($conn,$sql);
            
                goto2("viewAbout.php"," Statistic is successfully deleted");
            }
?>
