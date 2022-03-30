<?php
  require_once 'head.php';
  require_once 'config/settings.php';
  require_once 'config/db.php';
  require_once 'config/session.php';
?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      
      <a href="config/deletesession.php"><button style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Logout</button></a>

      <h1 class="logo"><a href="index.php" style="text-decoration:none;"><?php echo $header ; ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#<?php echo $tool1; ?>"><?php echo $tool1; ?></a></li>
          <li><a class="nav-link scrollto" href="#<?php echo $tool2; ?>"><?php echo $tool2; ?></a></li>
          <li><a class="nav-link scrollto" href="#<?php echo $tool3; ?>"><?php echo $tool3; ?></a></li>
          <li><a class="nav-link scrollto " href="#<?php echo $tool4; ?>"><?php echo $tool4; ?></a></li>
          <li><a class="nav-link scrollto" href="#<?php echo $tool5; ?>"><?php echo $tool5; ?></a></li>
          <!-- <li class="dropdown"><a href="#"><span><?php //echo $tool6; ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>  -->
          </li>
          <li><a class="nav-link scrollto" href="#<?php echo $tool7; ?>"><?php echo $tool7; ?></a></li> 
          <!--<li><a class="getstarted scrollto" href="#<?php //echo $tool8; ?>"><?php //echo $startbutt; ?></a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1><?php echo $slogan; ?></h1>
      <h2><?php echo $content; ?></h2>
      <div class="d-flex">
        <a href="#contact" class="btn-get-started scrollto" style="text-decoration:none;"><?php echo $startbutt; ?></a>
        <a href=<?php echo $videobutt; ?> class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php 
      require_once 'about.php';
    ?>
    <!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
    <?php 
      require_once 'aboutBoxes.php';
    ?>
    <!-- End About Boxes Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
             
            <?php
            $sql ="SELECT * FROM Services";  // sql command
            mysqli_select_db($conn,"dewi"); ///select database as default
            $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
          
            while ($row=mysqli_fetch_assoc($result)){
            ?>
            <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-<?php echo $row['IconName']; ?>"></i>
              <h4><a href="#"><?php echo $row['IconTitle']; ?></a></h4>
              <p><?php echo $row['contents']; ?></p>
            </div>
         </div>
         <?php } ?>
        </div>
      </div>
</section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
    <?php include('admin/TeamModal.php');?>
    
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>Check our Team</p>
      </div>

      <div class="row">
        <?php
          $sql ="select * from team";  
          mysqli_select_db($conn,"dewi");
          $result=mysqli_query($conn,$sql);
           
          while ($row=mysqli_fetch_assoc($result))
          { ?>
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="pic"><img src="<?php echo $row['imglink']; ?>" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4><?php echo $row['Name'];?></h4>
                  <span><?php echo $row['Job'];?></span>
                  <div class="social">
                      <a href="<?php echo $row['twitterlink'];?>"><i class="bi bi-twitter"></i></a>
                      <a href="<?php echo $row['facebooklink'];?>"><i class="bi bi-facebook"></i></a>
                      <a href="<?php echo $row['instagramlink'];?>"><i class="bi bi-instagram"></i></a>
                      <a href="<?php echo $row['linkedinlink'];?>"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php
          } ?>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up"">
    <div class=" section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>
      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <?php 
                    mysqli_select_db($conn,"dewi");
                    $sql = "SELECT * FROM tbladdress";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)!=0){
                    $row=mysqli_fetch_assoc($result);  
                ?>
                <p><?php echo $row['Address'];?></p>
                <?php }?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <?php
                    mysqli_select_db($conn,"dewi");
                    $sql = "SELECT email FROM tblcontact";
                    $result = mysqli_query($conn,$sql); 
                    while($row=mysqli_fetch_assoc($result)){
                ?>
                <p><?php echo $row['email'];?></p>
                <?php } ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <?php
                    mysqli_select_db($conn,"dewi");
                    $sql = "SELECT phone FROM tblcontact";
                    $result = mysqli_query($conn,$sql); 
                    while($row=mysqli_fetch_assoc($result)){
                ?>
                <p><?php echo $row['phone'] ; ?></p>
                <?php  } ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Dewi</h3>
              <?php 
                    mysqli_select_db($conn,"dewi");
                    $sql = "SELECT * FROM tbladdress";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)!=0){
                    $row=mysqli_fetch_assoc($result); 
                    } 
                ?>
              <p>
              <?php echo $row['Address'];?><br>
                <br>
                <?php 
                    mysqli_select_db($conn,"dewi");
                    $sql = "SELECT * FROM tblcontact";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)!=0){
                    $row=mysqli_fetch_assoc($result);
                    $phone = $row['phone'];  
                    $email = $row['email'];
                    }
                ?>
                <strong>Phone: </strong><?php echo $phone; ?><br>
                <strong>Email: </strong><?php echo $email;?><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
            <?php
            $sql ="SELECT * FROM Services";  // sql command
            mysqli_select_db($conn,"dewi"); ///select database as default
            $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
          
            while ($row=mysqli_fetch_assoc($result)){
            ?>
              <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo $row['IconTitle']; ?></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Dewi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

<?php
  require_once 'foot.php';
?>