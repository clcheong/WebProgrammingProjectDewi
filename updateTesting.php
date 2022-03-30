<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
    require_once 'config/functions.php';
?>


<?php

    if(isset($_POST['id'])){
            
        $id = $_POST['id'];
        $sub=$_POST['statTitle'];
        $stat=$_POST['statValue'];
        $i = $_POST['icon'];

        $sql = "UPDATE `dewi`.`about_stats_tbl` SET `subtitle` = '".$sub."', `statistic` = '".$stat."', `icon` = '".$i."' WHERE `id` = '".$id."'";
        mysqli_select_db($conn,"dewi");
        $result = mysqli_query($conn,$sql);
    
        goto2("viewAbout.php"," Statistic is successfully updated");
    }
    else{


        $id = $_GET['id'];
        
      
        $sql = "select * from about_stats_tbl where id='".$id."'";
        mysqli_select_db($conn,"dewi");
        $result = mysqli_query($conn,$sql);
      
        $row=mysqli_fetch_assoc($result);
?>



<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>About</h2>
            <p>Statistics</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="updateTesting.php" method="post" role="form" style="box-shadow:0 0 30px rgb(214 215 216 / 60%); padding:30px;">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <h3>Statistic ID</h3>
                        <input type="text" name="id" class="form-control" id="id" value="<?php echo $row['id']; ?>" style="background-color:lightgray;">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <h3>Statistic Title</h3>
                        <input type="text" class="form-control" name="statTitle" id="statTitle" value="<?php echo $row['subtitle']; ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-group mt-3">
                    <h3>Statistic Value</h3>
                    <input type="text" class="form-control" name="statValue" id="statValue" value="<?php echo $row['statistic']; ?>" required>
                </div>
                <br>
                <div class="form-group mt-3">
                    <h3>Statistic Icon Directory</h3>
                    <input type="text" class="form-control" name="icon" value="<?php echo $row['icon']; ?>" required></textarea>
                </div>
                <br>
                <div class="text-center">
                    <button name="submit" id="submit" type="submit" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">
                        Update Statistic
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