<?php 
include('head.php'); 
require_once('config/variable.php');
require_once('config/db.php');
require_once('config/functions.php');
require_once 'config/session.php';
?>

<style>

a{
    color: #ff4a17;
    text-decoration: none;
}

</style>


    <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <?php include('admin/TeamModal.php');?>
    
    <div class="container" data-aos="fade-up">

    <div class="container" data-aos="fade-up" style="color:#ff4a17;">
        <i class="bi bi-chevron-left"></i>
        <a href="admin.php">Back to Admin Panel</a>
    </div>

    <br>
    <br>
    <br>

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
        {
      ?>
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="<?php echo $row['imglink']; ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>
                  <?php echo "TeamID: ".$row['TeamID'];?>
                  <br><br>
                  <?php echo $row['Name']; ?>
                </h4>
                <span><?php echo $row['Job'];?></span>
                <div class="social">
                  <a href="<?php echo $row['twitterlink'];?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo $row['facebooklink'];?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo $row['instagramlink'];?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo $row['linkedinlink'];?>"><i class="bi bi-linkedin"></i></a>
                </div>
                <a href="admin/deleteteam.php?TeamID=<?php echo  $row['TeamID'] ; ?>">Delete</a>
              </div>
            </div>
          </div>
          <?php } ?>
      </div>
      <button data-bs-toggle="modal" data-bs-target="#editUserNameModal" class="btn btn-success">Update Name</button>
      &nbsp
      <button data-bs-toggle="modal" data-bs-target="#editUserJobModal" class="btn btn-success">Update Job</button>
      &nbsp
      <button data-bs-toggle="modal" data-bs-target="#editUserImageModal" class="btn btn-success">Update Image</button>
      &nbsp
      <button data-bs-toggle="modal" data-bs-target="#editUserSocialMediaModal" class="btn btn-success">Update Social Media</button>
      &nbsp
      <a href="admin/insertteam.php" class="btn btn-success">Insert Users </a>
    </div>
  </section><!-- End Team Section -->

  <?php
  require_once 'foot.php';
?>