<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
    require_once 'config/functions.php';
?>


<?php

    if(isset($_POST['title'])){
            
        $title = $_POST['title'];
        $vid=$_POST['vidlink'];
        $pic=$_POST['coverpiclink'];
        $content1 = $_POST['content1'];
        $content2 = $_POST['content2'];

        $sql = "UPDATE `dewi`.`about_details_tbl` SET `video` = '".$vid."', `title` = '".$title."', `para1` = '".$content1."', `coverpic` = '".$pic."', `para2` = '".$content2."' WHERE `id` = '1'";
        mysqli_select_db($conn,"dewi");
        $result = mysqli_query($conn,$sql);


        $sql2 = "select * from about_details_list_tbl";
        mysqli_select_db($conn,"dewi");
        $result2 = mysqli_query($conn,$sql2);
        $n = 1;
        while($row2 = mysqli_fetch_assoc($result2)){

            $desc = $_POST['listdesc'.$n];

            $sql2 = "UPDATE `dewi`.`about_details_list_tbl` SET `description` = '".$desc."' WHERE `listNo` = '".$n."'";
            mysqli_select_db($conn,$sql2);
            $result = mysqli_query($conn,$sql2);

            $n++;
        }
    
        goto2("viewAbout.php"," Details are successfully updated");
    }

?>


<?php
    require_once 'foot.php';
?>