<?php 
  require_once("config/db.php");
  require_once("config/settings.php");
  require_once("config/session.php");
?>

<?php include("head.php")?>

<body>
    <!-- ======= Admin Panel Section ======= -->

        <section class="admin">
          <div class="logout">
          <a href="config/deletesession.php"><button style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Logout</button></a>
          </div>
          <div class="adminpanel">
            <img src="assets/img/team/team-1.jpg" alt="" class="avatar">
            <h1>Admin Panel</h1>
            <div class="status"><p>Online</p></div>
          </div>
            <nav class="adminnav">
            <div>
                  <a href="admin/admin ckj/viewhome.php">Home</a>
              </div>
              <div>
                  <a href="viewAbout.php">About</a>
              </div>
              <div>
                  <a href="admin/viewservices.php">Service</a>
              </div>
              <div>
                  <a href="viewTeams.php">Team</a>
              </div>
              <div>
                  <a href="viewContact.php">Contact</a>
              </div>
            </nav>
        </section>
      
        <section id="hero" width="100%">
        </section>


  </main>
  <!-- End #main -->

  <?php
  require_once 'foot.php';
?>