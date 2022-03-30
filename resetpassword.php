<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
    require_once 'config/functions.php';

    $email = $_GET['email'];

    if(isset($_POST['password']) && isset($_POST['passwordC'])){

        $pw = $_POST['password'];
        $pwC = $_POST['passwordC'];

        if($pw == $pwC){
           
            $conn=new mysqli($servername,$user,$passw);
            mysqli_select_db($conn,"dewi");
            $sql = "UPDATE `dewi`.`users_tbl` SET `password` = '".$pw."' WHERE `username` = '".$email."'";
            $result = mysqli_query($conn,$sql);

            goto2('login.php',"Your password has been updated.");
        }

        else{
            goto2('resetpassword.php?email='.$email,"Confirm Password does not match!");
        }

    }


?>



<section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <section id="contact" class="contact"  style="border-radius:30px; background-color:#f8f9fa; padding:30px 45px;">

                <form action="resetpassword.php?email=<?php echo $email; ?>" method="post" role="form">
                    <div class="row">
                        <img class="img-fluid" src="assets/img/resetpassword.png" style="height:350px; width:350px;">
                    </div>
                    <div class="form-group mt-3" style="width:100%;">
                    <input type="password" class="form-control text-center" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group mt-3" style="width:100%;">
                    <input type="password" class="form-control text-center" name="passwordC" id="passwordC" placeholder="Confirm Password" required>
                    </div>
                    <div class="my-3">
                    </div>
                    <div style="display:flex; flex-direction:row; justify-content:space-evenly;">
                        <div class="text-center"><button type="submit" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Confirm</button></div>
                        <div class="text-center"><button type="reset" style="background: #ff4a17; border: 0; padding: 10px 40px; color: #fff; transition: 0.4s; border-radius: 4px;">Clear</button></div>
                    </div>
                </form>
            </section>
        </div>
    </section>


<?php
    require_once 'foot.php';
?>