<?php
require_once('../../config/variable.php');
require_once('../../config/functions.php');
require_once('../../config/db.php');
//require_once '../../config/session.php';
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dewi Bootstrap Template - Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi - v4.3.0
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<!-- ======= Services Section ======= -->


<main id="main">

  <section id="services" class="services section-bg">

  <div class="container" data-aos="fade-up" style="color:#ff4a17;">
        <i class="bi bi-chevron-left"></i>
        <a href="../../admin.php">Back to Admin Panel</a>
    </div>

    <br>
    <br>
    <br>


      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Homes</h2>
          <p>Check our Home</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">

        <table>
                <tr>
                  <th style="text-align: center">id</th>
                  <th style="text-align: center">title</th>
                  <th style="text-align: center">header</th>
                  <th style="text-align: center">slogan</th>
                  <th style="text-align: center">content</th>
                  <th style="text-align: center">tool1</th>
                  <th style="text-align: center">tool2</th>
                  <th style="text-align: center">tool3</th>
                  <th style="text-align: center">tool4</th>
                  <th style="text-align: center">tool5</th>
                  <th style="text-align: center">tool6</th>
                  <th style="text-align: center">tool7</th>
                  <th style="text-align: center">startbutton</th>
                  <th style="text-align: center">videobutton</th>
                  <th style="text-align: center">Background</th>
                  </tr>
             
            <?php
            
            
            $sql ="SELECT * FROM webtitle";  // sql command
            mysqli_select_db($conn,"dewi"); ///select database as default
            $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql

            while ($row=mysqli_fetch_assoc($result)){
            ?>
            <div class="col-md-6 mt-4 mt-md-0">
                <tr>
                <td><?php echo $row['id'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['title'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['header'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['slogan'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['content'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['tool1'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['tool2'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['tool3'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['tool4'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['tool5'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['tool6'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['tool7'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['startbutt'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['videobutt'] ; ?></td>
                  <td style="text-align: center"><?php echo $row['Bgpic'] ; ?></td>
                  <td><p><a href="uphome.php?id=<?php echo $row['id'] ; ?>">update </a> </p> </td>
                  <td><p><a href="deletehome.php?id=<?php echo $row['id'] ; ?>">delete </a> </p> </td>
                  </tr>
                  
                </div>
              </div>
                  <?php } ?>
            </div>
            <a href="inhome.php"> Insert new </a>
            </div>  
    </section><!-- End Services Section -->
</main><!-- End #main -->

  
  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>
</html>