<!DOCTYPE html>
<html lang="zxx">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> <?php include 'Layout/header.php'; ?> <div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
              <div class="box_header m-0">
                <div class="main-title">
                  <h3 class="m-0">Create New Admin</h3>
                </div>
              </div>
            </div>
            <div class="white_card_body">
              <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputAddress">UserName</label>
                    <input type="text" name="username" class="form-control" id="inputAddress" placeholder="Enter UserName" required>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="text" name="email" class="form-control" id="inputAddress" placeholder="Enter Email" required>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Profile Image(PNG,JPG,JPEG)</label>
                    <input type="file" name="img" class="form-control" id="inputAddress" placeholder="Enter Image">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Password</label>
                    <input type="Password" name="password" class="form-control" id="inputAddress" placeholder="Enter Password" required>
                  </div>
                  <div class="form-group">
                    <label for="inputState">Permission</label>
                    <select id="inputState" name="permission" class="form-control" required>
                      <option value="">Choose...</option>
                      <option value="1">Full Control</option>
                      <option value="2">Restricted Control</option>
                    </select>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <?php include 'Layout/footer.php'; ?> 
</body>
</html>