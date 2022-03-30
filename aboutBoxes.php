<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
?>






<section id="about-boxes" class="about-boxes">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <?php
                $sql = "select * from about_boxes_tbl";
                mysqli_select_db($conn,"dewi");
                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_assoc($result)){ 
            ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                <img src="assets/img/<?php echo $row['picture']; ?>" class="card-img-top" alt="...">
                <div class="card-icon">
                    <i class="<?php echo $row['icon']; ?>"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><a href=""><?php echo $row['boxTitle']; ?></a></h5>
                    <p class="card-text"><?php echo $row['boxDescription']; ?></p>
                </div>
                </div>
          </div>

            <?php }
                /*
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                    <img src="assets/img/about-boxes-2.jpg" class="card-img-top" alt="...">
                    <div class="card-icon">
                        <i class="ri-calendar-check-line"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Our Plan</a></h5>
                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                    <img src="assets/img/about-boxes-3.jpg" class="card-img-top" alt="...">
                    <div class="card-icon">
                        <i class="ri-movie-2-line"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Our Vision</a></h5>
                        <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet. </p>
                    </div>
                    </div>
                </div>
                */
            ?>
        </div>

    </div>
</section>

<?php
    require_once 'foot.php';
?>