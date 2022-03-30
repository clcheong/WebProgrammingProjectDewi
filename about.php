
<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';

?>


<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">


            <?php         
                $sql = "select * from about_stats_tbl";
                mysqli_select_db($conn,"dewi");
                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_assoc($result)){
            ?>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="<?php echo $row['icon'];  ?>"></i>
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $row['statistic'];  ?>" data-purecounter-duration="1" class="purecounter"></span>
                  <p><?php echo $row['subtitle']; ?></p>
                </div>
              </div>

            <?php }
            /*
              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Projects</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-clock"></i>
                  <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-award"></i>
                  <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Awards</p>
                </div>
              </div>

            */ ?>

            </div>
          </div>
        </div>

        <div class="row">

        <?php         
            $sql = "select * from about_details_tbl";
            mysqli_select_db($conn,"dewi");
            $result = mysqli_query($conn,$sql);

            $row = mysqli_fetch_assoc($result);
        ?>

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="<?php echo $row['coverpic']; ?>" class="img-fluid" alt="">
            <a href="<?php echo $row['video']; ?>" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3><?php echo $row['title']; ?></h3>
            <p class="fst-italic">
            <?php echo $row['para1']; ?>
            </p>
            <ul>

                <?php         
                    $sql2 = "select * from about_details_list_tbl";
                    mysqli_select_db($conn,"dewi");
                    $result2 = mysqli_query($conn,$sql2);

                    while($row2 = mysqli_fetch_assoc($result2)){
                ?>

              <li><i class="bx bx-check-double"></i><?php echo $row2['description']; ?></li>

              <?php } /*
              <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bx bx-check-double"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              */ ?>

            </ul>
            <p>
            <?php echo $row['para2']; ?>
            </p>
          </div>

        </div>

      </div>
    </section>


<?php
    require_once 'aboutBoxes.php';
    require_once 'foot.php';
?>