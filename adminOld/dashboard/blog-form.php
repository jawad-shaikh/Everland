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
                  <h3 class="m-0">Insert Blog data</h3>
                </div>
              </div>
            </div>
            <div class="white_card_body">
              <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputAddress">Blog image(PNG,JPG,JPEG)</label>
                    <input type="file" name="img" class="form-control" id="inputAddress" placeholder="Enter Image">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Title</label>
                    <input type="text" name="title" class="form-control" id="inputAddress" placeholder="Enter Title For Blog">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Description</label>
                    <textarea id="tiny" name="description"></textarea>
                  </div>
                  <button type="submit" name="blog_upload" class="btn btn-primary">Upload</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <?php include 'Layout/footer.php'; ?> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js"></script>
  <script src="js/blog-edit-tinymce-init.js"></script>
</body>
</html>