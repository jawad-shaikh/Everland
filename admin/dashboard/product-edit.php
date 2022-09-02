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
                <form action="#" method="POST">
                  <div class="form-group">
                    <label for="inputAddress">Title</label>
                    <input type="text" name="title" value="title" class="form-control" id="inputAddress" placeholder="Enter Title For Product">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Price</label>
                    <input type="number" name="price" value="200" class="form-control" id="inputAddress" placeholder="Enter Price For Product">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Description</label>
                    <textarea id="tiny" name="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, quibusdam!</textarea>
                  </div>
                  <div class="form-group form-check">
                    <input type="hidden" name="onSale" value="0" />
                    <input type="checkbox" name="onSale" value="1" class="form-check-input" id="on_or_off_checkbox" checked>
                    <label class="form-check-label" for="exampleCheck1">Check me If Product On Sale</label>
                  </div>
                  <div id="box">
                    <div class="form-group">
                      <label for="inputState">Select Discount Type First(For Sale Only)</label>
                      <select id="inputState" name="discount_type" class="form-control">
                        <option value="discount">20</option>
                        <option value="1">Discount in %</option>
                        <option value="2">Discount in Price</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Sale Discount</label>
                      <input type="number" name="discount_price" value="200" class="form-control" id="inputAddress" placeholder="Enter Discount Amount or %">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Start Date</label>
                      <input type="date" name="sdate" value="2012" class="form-control" id="inputAddress">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">End Date</label>
                      <input type="date" name="edate" value="2013" class="form-control" id="inputAddress">
                    </div>
                  </div>
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <?php include 'Layout/footer.php'; ?> 
  <script src="../../lib/tinymce/tinymce.min.js"></script>
  <script src="js/blog-edit-tinymce-init.js"></script>
  </body>
</html>