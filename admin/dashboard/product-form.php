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
                  <h3 class="m-0">Insert Services data</h3>
                </div>
              </div>
            </div>
            <div class="white_card_body">
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputAddress">Title</label>
                    <input type="text" name="title" class="form-control" id="inputAddress" placeholder="Enter Title For Product">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Price</label>
                    <input type="number" name="price" class="form-control" id="inputAddress" placeholder="Enter Price For Product">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Choose Multiple Images(PNG,JPG,JPEG)</label>
                    <input type="file" name="image[]" class="form-control" id="inputAddress" multiple />
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Description</label>
                    <textarea id="tiny" name="description"></textarea>
                  </div>
                  <div class="form-group form-check">
                    <input type="hidden" name="onSale" value="0" />
                    <input type="checkbox" name="onSale" value="1" class="form-check-input" id="on_or_off_checkbox" onchange="toggleDisplay()">
                    <label class="form-check-label" for="exampleCheck1">Check me If Product On Sale</label>
                  </div>
                  <div id="box">
                    <div class="form-group">
                      <label for="inputState">Select Discount Type First(For Sale Only)</label>
                      <select id="inputState" name="discount_type" class="form-control">
                        <option value="">Choose...</option>
                        <option value="1">Discount in %</option>
                        <option value="2">Discount in Price</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Sale Discount</label>
                      <input type="number" name="discount_price" class="form-control" id="inputAddress" placeholder="Enter Discount Amount or %">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Start Date</label>
                      <input type="date" name="sdate" class="form-control" id="inputAddress">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">End Date</label>
                      <input type="date" name="edate" class="form-control" id="inputAddress">
                    </div>
                  </div>
                  <!-- close box -->
                  <button type="submit" name="upload" class="btn btn-primary">Upload</button>
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