<?php
    require_once 'head.php';
    require_once 'config/functions.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';


    if(isset($_POST['name'])){
        
        $u=$_POST['uname'];
        $n=$_POST['name'];
        $usertype = $_POST['usertype'];
        $userpassword = $_POST['password'];


        $conn=new mysqli($servername,$user,$passw);
        mysqli_select_db($conn,"dewi");
        $sql=" SELECT username as U FROM `users_tbl` where username='".$u."'";
        $result = mysqli_query($conn,$sql);

        if($row = mysqli_fetch_assoc($result)){
            goto2('register.php',"Email already registered!");
        }
        else{ 
            $sql = "INSERT INTO `dewi`.`users_tbl` (`username`,`password`,`usertype`,`name`,`otp`) VALUES ('".$u."','".$userpassword."', '".$usertype."','".$n."','0')";

            mysqli_select_db($conn,"dewi");
            $result = mysqli_query($conn,$sql);
        
            goto2("login.php","You Have Registered Successfully!");          
        }

    }
    else{
?>


<style>

a{
    color: #ff4a17;
    text-decoration: none;
}

</style>

<section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
        <section id="contact" class="contact"  style="border-radius:30px; background-color:#f8f9fa; padding: 0px 45px 30px;">

            <form action="register.php" method="post" role="form">
                <div class="row">
                    <img class="img-fluid" src="assets/img/register.png" style="height:257px; width:400px;">
                </div>
                <div class="form-group mt-3" style="width:100%;">
                <input type="text" class="form-control text-center" name="uname" id="uname" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3" style="width:100%;">
                <input type="password" class="form-control text-center" name="password" id="password" placeholder="Your Password" required>
                </div>
                <div class="form-group mt-3" style="width:100%;">
                <input type="name" class="form-control text-center" name="name" id="name" placeholder="Your Full Name" required>
                </div>


                <select id="usertype" name="usertype" class="" value="<?php echo $row['usertype']; ?>" style="color:#ff4a17; border:none; background-color:transparent; margin:10px auto 0; outline:none;"><i class="bi bi-chevron-down"></i>
                    <option value="0" style="color:#212529;" selected disabled>Account Type</option>
                    <!-- repeat value taken from db -->

                    <?php  
                    
                    $sql = "SELECT * FROM `dewi`.`user_category_tbl`";
                    mysqli_select_db($conn,"dewi");
                    $result = mysqli_query($conn,$sql);

                    while($rowcat = mysqli_fetch_assoc($result)){  ?>

                    <option value="<?php echo $rowcat['usertype'];?>" style="color:#212529;"><?php echo $rowcat['description']; ?></option>

                    <?php } ?>

                </select>
                

                <div class="my-3">
                </div>
                <div style="display:flex; flex-direction:row; justify-content:space-evenly;">
                    <div class="text-center"><button type="submit" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Register</button></div>
                    <div class="text-center"><button type="reset" style="background: #ff4a17; border: 0; padding: 10px 32px; color: #fff; transition: 0.4s; border-radius: 4px;">Clear</button></div>
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