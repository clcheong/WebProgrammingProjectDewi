

<?php
    require_once 'head.php';
    require_once 'config/functions.php';

    include('config/checksession.php');

    if (!empty(isset($_GET['uname']))){ 
        $status = logincheck(trim($_GET['uname']),trim($_GET['password']));
        $name = checkUType(trim($_GET['uname']),3);
        $usertype = checkUType(trim($_GET['uname']),1);
        $interface = checkUType(trim($_GET['uname']),2);

        if($status==1){
            $_SESSION['username']=$_GET['uname'];
            $_SESSION['usertype']=$usertype;
            $_SESSION['interface']=$interface;

            createCookie($_GET['uname'],$_GET['password']);

            goto2($interface,"Welcome to the portal, ".$name);
        }
        else{

            goto2("login.php","Wrong Username or Password");

        }

    }
    else{

        if ((isset($_COOKIE['loginuser']))&&(isset($_COOKIE['loginpass']))) {

            $cu = $_COOKIE['loginuser'];
            $up = $_COOKIE['loginpass'];

        }  
?>


<style>

a{
    color: #ff4a17;
    text-decoration: none;
}

</style>

<section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
        <section id="contact" class="contact"  style="border-radius:30px; background-color:#f8f9fa; padding:30px 45px;">

            <form action="login.php" method="get" role="form">
                <div class="row">
                    <img class="img-fluid" src="assets/img/login2.png" style="height:150px; width:320px;">
                </div>
                <div class="form-group mt-3" style="width:100%;">
                <input type="text" class="form-control text-center" name="uname" id="uname" value="<?php  if(isset($cu)){ echo $cu;} ?>" placeholder="Email" required>
                </div>
                <div class="form-group mt-3" style="width:100%;">
                <input type="password" class="form-control text-center" name="password" id="password" value="<?php if(isset($up)){echo $up;} ?>" placeholder="Password" required>
                </div>
                <div class="my-3">
                </div>
                <div style="display:flex; flex-direction:row; justify-content:space-evenly;">
                    <div class="text-center"><button type="submit" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Login</button></div>
                    <div class="text-center"><button type="reset" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Clear</button></div>
                </div>
                <br>
                <a href="config/deletecookie.php">Delete Cookie</a>
                <br>
                <br>
                <a href="forgetpassword.php">Forgot Your Password?</a>
                <br>
                <br>
                <a href="register.php">Register Now</a>
            </form>
        </section>
    </div>
</section>

<?php }?>

<?php
  require_once 'foot.php';
?>