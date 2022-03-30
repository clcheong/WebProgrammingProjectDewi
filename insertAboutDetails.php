<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
    require_once 'config/functions.php';
?>

<?php
        
    $id = $_GET['id'];

    $sql = "INSERT INTO `dewi`.`about_details_list_tbl` (`listNo`) VALUES ('".$id."')";

    mysqli_select_db($conn,"dewi");
    $result = mysqli_query($conn,$sql);
    
    goto2("viewAbout.php"," List Item is inserted successfully");
    
?>

<?php
    require_once 'foot.php';
?>