<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
    require_once 'config/functions.php';
?>

<?php

    if(isset($_POST['id'])){
        
        $id=$_POST['id'];
        $statTitle=$_POST['statTitle'];
        $statValue=$_POST['statValue'];
        $icon = $_POST['icon'];

        $sql = "INSERT INTO `dewi`.`about_stats_tbl` (`id`,`subtitle`,`statistic`,`icon`) VALUES ('".$id."', '".$statTitle."','".$statValue."','".$icon."')";

        //echo $sql;

        mysqli_select_db($conn,"dewi");
        $result = mysqli_query($conn,$sql);
      
       // $row=mysqli_fetch_assoc($result);
        goto2("viewAbout.php"," Statistic is inserted successfully");
    }
    else{

        $sql = "select * from about_stats_tbl";
        mysqli_select_db($conn,"dewi");
        $result = mysqli_query($conn,$sql);
        $no = 1;
      
        while($row=mysqli_fetch_assoc($result)){ 
            $no++;
        }
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
                <p>Statistics</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-4 mt-lg-0">
                <form action="insertAboutStats.php" method="post" role="form" style="box-shadow:0 0 30px rgb(214 215 216 / 60%); padding:30px;">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <h3>Statistic ID</h3>
                            <input type="text" name="id" class="form-control" id="id" value="<?php echo $no; ?>" style="background-color:lightgray;">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <h3>Statistic Title</h3>
                            <input type="text" class="form-control" name="statTitle" id="statTitle" placeholder="e.g. Positive Feedbacks" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group mt-3">
                        <h3>Statistic Value</h3>
                        <input type="text" class="form-control" name="statValue" id="statValue" placeholder="e.g. 12" required>
                    </div>
                    <br>
                    <div class="form-group mt-3">
                        <h3>Statistic Icon Directory</h3>
                        <input type="text" class="form-control" name="icon" placeholder="e.g. bi bi-award" required>
                        <a href="https://icons.getbootstrap.com/" target="_blank">Get Icon from Bootstrap</a>
                    </div>
                    <br>
                    <div class="text-center">
                        <button name="submit" id="submit" type="submit" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">
                            Insert This Statistic
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