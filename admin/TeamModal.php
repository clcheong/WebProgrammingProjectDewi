<div class="modal fade" id="editUserNameModal" tabindex="-1" aria-labelledby="editUserNameModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserNameModalLabel">Edit User Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="admin/updatename.php" method="POST">
          <div class="mb-3">
            <label for="teamid" class="col-form-label">TeamID:</label>
            <input type="text" class="form-control" id="teamid" name="teamid">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <input type="submit" value="Save" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="editUserJobModal" tabindex="-1" aria-labelledby="editUserJobModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserJobModalLabel">Edit User Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="admin/updatejob.php" method="POST">
          <div class="mb-3">
            <label for="teamid" class="col-form-label">TeamID:</label>
            <input type="text" class="form-control" id="teamid" name="teamid">
            <label for="job" class="col-form-label">Job:</label>
            <input type="text" class="form-control" id="job" name="job">
          </div>
          <input type="submit" value="Save" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="editUserImageModal" tabindex="-1" aria-labelledby="editUserImageModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserImageModalLabel">Edit User Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="admin/updateimage.php" method="POST">
          <div class="mb-3">
            <label for="teamid" class="col-form-label">TeamID:</label>
            <input type="text" class="form-control" id="teamid" name="teamid"><br>
            <label for="Description"> Image Description:</label>
            <select name="imglink" id="imglink">
            <option value="0"> Select the picture</option>
            <?php
                $sql ="select * from personalimage";  // sql command
                mysqli_select_db($conn,"dewi"); ///select database as default
                $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql

                while( $rowimg=mysqli_fetch_assoc($result)) {   ?> 
                <option value="<?php echo $rowimg['imglink'];?>"><?php echo $rowimg['imgDescription'];?>
            </option>
            <?php }  ?>
            </select>
          </div>
          <input type="submit" value="Save" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="editUserSocialMediaModal" tabindex="-1" aria-labelledby="editUserSocialMediaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserSocialMediaModalLabel">Edit User Social Media Link</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="admin/updatesocialmedia.php" method="POST">
          <div class="mb-3">
            <label for="teamid" class="col-form-label">TeamID:</label>
            <input type="text" class="form-control" id="teamid" name="teamid"><br>
            <label for="Twitter"> Twitter link:</label>
            <input type="text" class="form-control" id="twitter" name="twitter"><br>
            <label for="Facebook"> Facebook link:</label>
            <input type="text" class="form-control" id="facebook" name="facebook"><br>
            <label for="Instagram"> Instagram link:</label>
            <input type="text" class="form-control" id="instagram" name="instagram"><br>
            <label for="Linkedin"> Linkedin link:</label>
            <input type="text" class="form-control" id="linkedin" name="linkedin"><br>
          </div>
          <input type="submit" value="Save" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>