<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
    require_once 'config/functions.php';
?>


<?php

    if(isset($_POST['boxID'])){
            
        $id=$_POST['boxID'];
        $pic=$_POST['picture'];
        $icon=$_POST['icon'];
        $title = $_POST['boxTitle'];
        $desc=$_POST['boxDescription'];

        $sql = "UPDATE `dewi`.`about_boxes_tbl` SET `picture` = '".$pic."', `icon` = '".$icon."', `boxTitle` = '".$title."',
         `boxDescription` = '".$desc."' WHERE `boxID` = '".$id."'";
        mysqli_select_db($conn,"dewi");
        $result = mysqli_query($conn,$sql);
    
        goto2("viewAbout.php"," Box card is successfully updated");
    }
    else{


        $id = $_GET['id'];
        
      
        $sql = "select * from about_boxes_tbl where boxID='".$id."'";
        mysqli_select_db($conn,"dewi");
        $result = mysqli_query($conn,$sql);
      
        $row=mysqli_fetch_assoc($result);
?>

<style>

a{
    color: #ff4a17;
    text-decoration: none;
}

</style>

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>About</h2>
            <p>Boxes</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="updateAboutBoxes.php" method="post" role="form" style="box-shadow:0 0 30px rgb(214 215 216 / 60%); padding:30px;">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <h3>Box ID</h3>
                        <input type="text" name="boxID" class="form-control" id="boxID" value="<?php echo $row['boxID']; ?>" style="background-color:lightgray;">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <h3>Box Image</h3>
                        <input type="text" class="form-control" name="picture" id="picture" value="<?php echo $row['picture']; ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-group mt-3">
                    <h3>Box Icon</h3>
                    <input type="text" class="form-control" name="icon" id="icon" value="<?php echo $row['icon']; ?>" required>
                    <a href="https://remixicon.com/" target="_blank">Get Icon from Remixicon</a>
                </div>
                <br>
                <div class="form-group mt-3">
                    <h3>Box Title</h3>
                    <input type="text" class="form-control" name="boxTitle" value="<?php echo $row['boxTitle']; ?>" required></textarea>
                </div>
                <br>
                <div class="form-group mt-3">
                    <h3>Box Description</h3>
                    <input type="text" class="form-control" name="boxDescription" value="<?php echo $row['boxDescription']; ?>" required></textarea>
                </div>
                <br>
                <div class="text-center">
                    <button name="submit" id="submit" type="submit" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">
                        Update Box card
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>



<?php } ?>

<?php
    require_once 'foot.php';
?>