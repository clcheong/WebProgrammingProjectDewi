<?php 
  require_once("config/db.php");
  require_once("config/settings.php");
  //require_once("config/functions.php");
?>

<?php include("head.php")?>

<style>

a{
    color: #ff4a17;
    text-decoration: none;
}

</style>

    <section id="contact" class="contact">
      <?php include("ContactModal.php");?>
      <div class="container" data-aos="fade-up">

      <div class="container" data-aos="fade-up" style="color:#ff4a17;">
        <i class="bi bi-chevron-left"></i>
        <a href="admin.php">Back to Admin Panel</a>
    </div>

    <br>
    <br>
    <br>

    <div class=" section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#emailmodal">Add New Contact</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addressmodal">Add New Address</button>
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
                <p><a href="#" data-bs-toggle="modal" data-bs-target="#updateAddressmodal">Edit</a></p>
                <p><a href="deleteaddress.php?AddressID=<?php echo  $row['AddressID'] ; ?>">Delete</a></p>
                <?php }?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <?php
                    mysqli_select_db($conn,"businesswebsite");
                    $sql = "SELECT email FROM tblcontact";
                    $result = mysqli_query($conn,$sql); 
                    while($row=mysqli_fetch_assoc($result)){
                ?>
                <p><?php echo $row['email'];?></p>
                <p><a href="#"data-bs-toggle="modal" data-bs-target="#updateemailmodal">Edit</a></p>
                <p><a href="deletecontact.php?email=<?php echo  $row['email'] ; ?>">Delete</a></p>
                <?php } ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <?php
                    mysqli_select_db($conn,"businesswebsite");
                    $sql = "SELECT phone FROM tblcontact";
                    $result = mysqli_query($conn,$sql); 
                    while($row=mysqli_fetch_assoc($result)){
                ?>
                <p><?php echo $row['phone'] ; ?></p>
                <p><a href="#"data-bs-toggle="modal" data-bs-target="#updatephonemodal">Edit</a></p>
                <p><a href="deletecontact.php?phone=<?php echo  $row['phone'] ; ?>">Delete</a></p>
                <?php  } ?>
              </div>
            </div>
          </div>
        </div>


      </div>

      </div>
    </section>



    <?php
  require_once 'foot.php';
?>