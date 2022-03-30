<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
    require_once 'config/functions.php';


    if(isset($_POST['uname'])){

        $u = $_POST['uname'];

        $conn=new mysqli($servername,$user,$passw);
        mysqli_select_db($conn,"dewi");
        $sql=" SELECT count(username) as L FROM `users_tbl` where username='".$u."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if(!$row['L']==1){
            goto2('forgetpassword.php',"The user is not registered.");
        }
        
        else{

            $otp = random_int(100000, 999999);
            echo $otp;

            $sql = "UPDATE `dewi`.`users_tbl` SET `otp` = '".$otp."' WHERE `username` = '".$u."'";
            mysqli_query($conn,$sql);

            $email=$_POST['uname'];
            $subject = 'Password Reset OTP';
            $message = 'Your Password Reset OTP is '. $otp;
        
            mail($email, $subject, $message);

?>
    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <section id="contact" class="contact"  style="border-radius:30px; background-color:#f8f9fa; padding:30px 45px;">
    
                <form action="forgetpassword.php" method="post" role="form">
                    <div class="row">
                        <img class="img-fluid" src="assets/img/forgetPW.png" style="height:315px; width:350px;">
                    </div>
                    <div class="form-group mt-3" style="width:100%;">
                    <p>An OTP has been sent to your email.</p>
                    <input type="text" class="form-control text-center" name="otp" id="otp" placeholder="OTP" required>
                    </div>
                    <div class="form-group mt-3" style="width:100%;">
                    <input type="text" class="form-control text-center" name="email" id="email" value="<?php echo $u; ?>" hidden>
                    </div>
                    <div class="my-3">
                    </div>
                    <div style="display:flex; flex-direction:row; justify-content:space-evenly;">
                        <div class="text-center"><button type="submit" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Submit</button></div>
                        <div class="text-center"><button type="reset" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Clear</button></div>
                    </div>
                    <br>
                    <a href="login.php">Cancel</a>
                </form>
            </section>
        </div>
    </section>
        
<?php } } 


    else if(isset($_POST['otp']) && isset($_POST['email'])){

        $otp = $_POST['otp'];
        $email = $_POST['email'];

        $conn=new mysqli($servername,$user,$passw);
        mysqli_select_db($conn,"dewi");
        $sql=" SELECT otp as O FROM `users_tbl` where username='".$email."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        if($row['O'] == $otp){

            $sql = "UPDATE `dewi`.`users_tbl` SET `otp` = '0' WHERE `username` = '".$email."'";
            $result = mysqli_query($conn,$sql);

            goto2('resetpassword.php?email='.$email,"OTP Verified!");

        }
        else{ 
            
            goto2('forgetpassword.php',"Wrong OTP!");

        }
    }


    else{ ?>


<style>

a{
    color: #ff4a17;
    text-decoration: none;
}

</style>


    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <section id="contact" class="contact"  style="border-radius:30px; background-color:#f8f9fa; padding:30px 45px;">

                <form action="forgetpassword.php" method="post" role="form">
                    <div class="row">
                        <img class="img-fluid" src="assets/img/forgetPW.png" style="height:315px; width:350px;">
                    </div>
                    <div class="form-group mt-3" style="width:100%;">
                    <input type="text" class="form-control text-center" name="uname" id="uname" placeholder="Email" required>
                    </div>
                    <!--<div class="form-group mt-3" style="width:100%;">
                    <input type="password" class="form-control text-center" name="password" id="password" value="<?php if(isset($up)){echo $up;} ?>" placeholder="Password" required>
                    </div>-->
                    <div class="my-3">
                    </div>
                    <div style="display:flex; flex-direction:row; justify-content:space-evenly;">
                        <div class="text-center"><button type="submit" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Send OTP</button></div>
                        <div class="text-center"><button type="reset" style="background: #ff4a17; border: 0; padding: 10px 40px; color: #fff; transition: 0.4s; border-radius: 4px;">Clear</button></div>
                    </div>
                    <br>
                    <a href="login.php">Cancel</a>
                </form>
            </section>
        </div>
    </section>

    <?php } ?>

<?php
    require_once 'foot.php';
?>