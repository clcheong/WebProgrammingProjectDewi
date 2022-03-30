<?php
    require_once 'head.php';
    require_once 'config/settings.php';
    require_once 'config/db.php';
    require_once 'config/session.php';
?>

<style>

a{
    color: #ff4a17;
    text-decoration: none;
}

</style>

<div class="container" data-aos="fade-up" style="display:flex; flex-direction:row; justify-content:space-between; align-items:center; margin:30px auto 0px;">
    
    <div class="container" data-aos="fade-up" style="color:#ff4a17;">
        <i class="bi bi-chevron-left"></i>
        <a href="admin.php">Back to Admin Panel</a>
    </div>

</div>

<section id="about" class="about" style="margin-top:0px;">
      <div class="container" data-aos="fade-up">
            <section id="contact" class="contact" style="margin-bottom:15px; padding-bottom:0px;">

                    <div class=" section-title">
                        <h2>About</h2>
                        <p>Statistics</p>
                    </div>

                            <table style="text-align:center; white-space:nowrap;">
                                <tr>
                                    <th style="padding:5px 15px;">No.</th>
                                    <th style="padding:5px 15px;">Statistic Title</th>
                                    <th style="padding:5px 15px;">Statistic Value</th>
                                    <th style="padding:5px 15px;">Statistic Icon</th>
                                    <th style="padding:5px 15px;"></th>
                                    <th style="padding:5px 15px;"></th>
                                </tr>
                                <?php
                                    $sql = "select * from about_stats_tbl";
                                    mysqli_select_db($conn,"dewi");
                                    $result = mysqli_query($conn,$sql);
                                    $no=1;

                                    while($row=mysqli_fetch_assoc($result)){
                                ?>

                                <tr>
                                    <td style="padding:5px 15px;"><?php echo $no; ?></td>
                                    <td style="padding:5px 15px;"><?php echo $row['subtitle']; ?></td>
                                    <td style="padding:5px 15px;"><?php echo $row['statistic']; ?></td>
                                    <td style="padding:5px 15px;"><?php echo $row['icon']; ?></td>
                                    <td style="padding:5px 15px;"><a href="updateAboutStats.php?id=<?php echo $row['id']; ?>">Update</td>
                                    <td style="padding:5px 15px;"><a href="deleteAboutStats.php?id=<?php echo $row['id']; ?>">Delete</td>
                                </tr>

                                <?php $no++; } ?>

                            </table>
                <br>
                <a href="insertAboutStats.php" style="padding:20px 10px;">Insert New Statistic</a>
            </section>
      </div>

      <br>
      <br>

      <div class="container" data-aos="fade-up">
            
        <section id="contact" class="contact">

            <div class=" section-title">
                <h2>About</h2>
                <p>Details</p>
            </div>
            
            <?php
                $sql = "select * from about_details_tbl";
                mysqli_select_db($conn,"dewi");
                $result = mysqli_query($conn,$sql); 
                $row = mysqli_fetch_assoc($result);
            ?>

            <div>
                <form action="updateAboutDetails.php" method="post" role="form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <h2>Company Video Link</h2>
                            <input type="text" name="vidlink" class="form-control" id="vidlink" value="<?php echo $row['video']; ?>" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <h2>Cover Image Directory</h2>
                            <input type="text" class="form-control" name="coverpiclink" id="coverpiclink" value="<?php echo $row['coverpic']; ?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group mt-3">
                        <h2>About Title</h2>
                        <input type="text" class="form-control" name="title" id="title" value="<?php echo $row['title']; ?>" required>
                    </div>
                    <br>
                    <div class="form-group mt-3">
                        <h2>Main Details</h2>
                        <textarea class="form-control" name="content1" rows="5" required><?php echo $row['para1']; ?></textarea>
                    </div>
                    <br>
                    <div class="form-group mt-3">
                        <h2>List Items</h2>
                        <table style="text-align:center; white-space:nowrap;">
                        <?php
                            $sql2 = "select * from about_details_list_tbl";
                            mysqli_select_db($conn,"dewi");
                            $result2 = mysqli_query($conn,$sql2);
                            $no = 1;
                            while($row2 = mysqli_fetch_assoc($result2)){
                        ?>
                            <tr>
                                <td style="padding:5px 15px; width:100%;"><input type="text" class="form-control" name="listdesc<?php echo $no; ?>" id="listdesc<?php echo $no; ?>" value="<?php echo $row2['description']; ?>" required></td>
                                <td style="padding:5px 15px;"><a href="deleteAboutDetails.php?id=<?php echo $no; ?>">Delete</a></td>
                            </tr>
                        <?php $no++; } ?>
                        </table>
                        <br>
                        <a href="insertAboutDetails.php?id=<?php echo $no; ?>" style="padding:20px 10px;">Insert New List Item</a>
                    </div>
                    <br>
                    <div class="form-group mt-3">
                        <h2>Additional Details</h2>
                        <textarea class="form-control" name="content2" rows="5" required><?php echo $row['para2']; ?></textarea>
                    </div>
                    <br>
                    <div class="text-center">
                      <button type="submit" style="background: #ff4a17; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">
                        Update Details
                      </button>
                    </div>
                </form>
            </div>
        </section>  
      </div>

      <br>
      <br>


      <div class="container" data-aos="fade-up">
            
        <section id="contact" class="contact" style="margin-bottom:15px; padding-bottom:0px;">

                    <div class=" section-title">
                        <h2>About</h2>
                        <p>Boxes</p>
                    </div>

                            <table style="text-align:center;">
                                <tr>
                                    <th style="padding:5px 20px;">No.</th>
                                    <th style="padding:5px 20px;">Card Title</th>
                                    <th style="padding:5px 20px;">Card Description</th>
                                    <th style="padding:5px 20px;">Card Icon</th>
                                    <th style="padding:5px 20px;">Card Picture</th>
                                    <th style="padding:5px 20px;"></th>
                                    <th style="padding:5px 20px;"></th>
                                </tr>
                                <?php
                                    $sql = "select * from about_boxes_tbl";
                                    mysqli_select_db($conn,"dewi");
                                    $result = mysqli_query($conn,$sql);
                                    $no=1;

                                    while($row=mysqli_fetch_assoc($result)){
                                ?>

                                <tr>
                                    <td style="padding:5px 20px;"><?php echo $no; ?></td>
                                    <td style="padding:5px 20px;"><?php echo $row['boxTitle']; ?></td>
                                    <td style="padding:5px 20px;"><?php echo $row['boxDescription']; ?></td>
                                    <td style="padding:5px 20px;"><?php echo $row['icon']; ?></td>
                                    <td style="padding:5px 20px;"><?php echo $row['picture']; ?></td>
                                    <td style="padding:5px 20px;"><a href="updateAboutBoxes.php?id=<?php echo $row['boxID']; ?>">Update</td>
                                    <td style="padding:5px 20px;"><a href="deleteAboutBoxes.php?id=<?php echo $row['boxID']; ?>">Delete</td>
                                </tr>

                                <?php $no++; } ?>

                            </table>
                <br>
                <a href="insertAboutBoxes.php?id=<?php echo $no; ?>" style="padding:20px 10px;">Insert New Box Card</a>
            </section>  
      </div>


</section>


<?php
    require_once 'foot.php';
?>