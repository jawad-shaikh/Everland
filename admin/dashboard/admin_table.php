<!DOCTYPE html>
<html lang="zxx">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <?php include 'Layout/header.php'; ?>
  <div class="main_content_iner ">
    <div class="container-fluid p-0">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
              <div class="box_header m-0">
                <div class="main-title">
                  <h3 class="m-0">Data table</h3>
                </div>
              </div>
            </div>
            <div class="white_card_body">
              <div class="QA_section">
                <div class="white_box_tittle list_header">
                  <h4>Table</h4>
                  <div class="box_right d-flex lms_block">
                    <div class="serach_field_2">
                      <div class="search_inner"></div>
                    </div>
                    <div class="add_button ml-10">
                      <a href="admin_form.php" class="btn_1">Add New</a>
                    </div>
                  </div>
                </div>
                <!--Table-->
                <div class="QA_table mb_30">
                  <table class="table lms_table_active ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          <a class="question_content">ID</a>
                        </th>
                        <td>Username</td>
                        <td>Email</td>
                        <td>
                          <img src="" class="img-fluid" width="70">Image
                        </td>
                        <td>
                          <a href="#" class="status_btn edit_btn">Edit</a>
                        </td>
                        <td>
                          <a type="button" class="delete status_btn del_btn" data-id="#">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <?php include 'Layout/footer.php'; ?>
  </body>
</html>