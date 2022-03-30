<?php 
require_once('../config/variable.php');
require_once('../config/db.php');
require_once('../config/functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dewi Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
    
    <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <?php 

        if (isset($_POST['name']))
        {
          $t=$_POST['teamid'];
          $n=$_POST['name'];
          $j=$_POST['job'];
          $i=$_POST['img'];
          $twitter=$_POST['twitter'];
          $facebook=$_POST['facebook'];
          $instagram=$_POST['instagram'];
          $linkedin=$_POST['linkedin'];
          $sql ="INSERT INTO `team` (`TeamID`, `Name`, `Job`, `imglink`, `twitterlink`, `facebooklink`, `instagramlink`, `linkedinlink`) 
                VALUES ('".$t."', '".$n."', '".$j."', '".$i."', '".$twitter."', '".$facebook."', '".$instagram."', '".$linkedin."')";  
          mysqli_select_db($conn,"dewi"); 
          $result=mysqli_query($conn,$sql);
          goto2("../viewTeams.php"," User is successfully Inserted");
        } 
        else 
        {  
        ?>
        <form action="insertteam.php" method="POST">
          <label for="Team ID">User ID:</label>
          <input type="text"  id="teamid" name="teamid" ><br><br>
          <label for="Name"> Name:</label>
          <input type="text" id="name" name="name"><br><br>
          <label for="Job"> Job:</label>
          <input type="text" id="job" name="job"><br><br>


          <select name="img" id="img">
          <option value="0"> Select the image</option>
          <?php
          $sql ="select * from personalimage";  
          mysqli_select_db($conn,"dewi"); 
          $result=mysqli_query($conn,$sql);  

          while( $rowimg=mysqli_fetch_assoc($result)) 
          {?> 
            <option value="<?php echo $rowimg['imglink'];?>"><?php echo $rowimg['imgDescription'];?></option>
          
          <?php }  ?>
          </select>

          <br><br>
          <label for="Twitter"> Twitter link:</label>
          <input type="text" id="twitter" name="twitter"><br><br>
          <label for="Facebook"> Facebook link:</label>
          <input type="text" id="facebook" name="facebook"><br><br>
          <label for="Instagram"> Instagram link:</label>
          <input type="text" id="instagram" name="instagram"><br><br>
          <label for="Linkedin"> Linkedin link:</label>
          <input type="text" id="linkedin" name="linkedin"><br><br>

          <input type="submit" value="Save">
        </form>

        <?php } ?>
      </div>
    </section><!-- End Team Section -->
  <!-- Vendor JS Files -->

  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>