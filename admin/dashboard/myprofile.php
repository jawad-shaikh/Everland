<!DOCTYPE html>
<html lang="zxx">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
  <?php include 'Layout/header.php'; ?> 
  <div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
              <div class="box_header m-0">
                <div class="main-title">
                  <h3 class="m-0">Edit Admin data</h3>
                </div>
              </div>
            </div>
            <div class="white_card_body">
              <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputAddress">UserName</label>
                    <input type="text" name="username" value="Username" class="form-control" id="inputAddress" placeholder="Enter username For Blog">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="text" name="email" value="Email" class="form-control" id="inputAddress" placeholder="Enter Email For Blog">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Profile Image(PNG,JPG,JPEG)</label>
                    <input type="file" name="img" class="form-control" id="inputAddress" value="" placeholder="Enter Image">
                    <input type="hidden" name="img_old" value="">
                    <img src="#" width="200" class="img-fluid">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Password</label>
                    <input type="Password" name="password" value="password" class="form-control" id="inputAddress" placeholder="Enter Password For Blog">
                  </div>
                  <button type="submit" name="User_edit" class="btn btn-primary">Upload</button>
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