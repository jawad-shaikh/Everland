<!DOCTYPE html>
<html lang="zxx">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <link rel="stylesheet" href="css/pd-images.css" />
  <?php include 'Layout/header.php'; ?> 
  <div class="main_content_iner ">
    <div class="container-fluid p-0">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
              <div class="box_header m-0">
                <div class="main-title">
                  <h3 class="m-0">Product Images</h3>
                </div>
              </div>
            </div>
            <div class="white_card_body">
              <div class="QA_section">
                <div class="white_box_tittle list_header">
                  <h4>Product Images</h4>
                  <div class="box_right d-flex lms_block">
                    <div class="serach_field_2">
                      <div class="search_inner"></div>
                    </div>
                    <div class="add_button ml-10">
                      <input type="file" class="select-file" name="image" accept="image/png, image/gif, image/jpeg" style="display: none;">
                      <a href="#" class="btn_1 file-btn">Add New</a>
                    </div>
                  </div>
                </div>
                <div class="QA_table mb_30">
                  <div class="new-images-section">
                    <div class="Title my-5">
                      <h5>Uploaded Images</h5>
                    </div>
                    <div class="images-wrapper">
                      <div class="image-box">
                        <img src="#" alt="" />
                        <button class="delete-btn delete" data-id="1">
                          <ion-icon name="trash-outline"></ion-icon>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="BlogModal" role="dialog" aria-labelledby="BlogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
      <div class="modal-content" id="info_view">
        <!-- data come from view_blog.php page -->
      </div>
    </div>
  </div>
  
  <?php include 'Layout/footer.php'; ?> 
  <!-- Modal end -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
  <script src="js/product-images.js"></script>
  </body>
</html>