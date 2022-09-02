<!DOCTYPE html>
<html lang="zxx">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> <?php include 'Layout/header.php'; ?> <div class="main_content_iner ">
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
                  </div>
                </div>
                <div class="QA_table mb_30">
                  <!-- table-responsive -->
                  <table class="table lms_table_active ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Checked</th>
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
                        <td>Number</td>
                        <td>Status</td>
                        <td>
                          <a type="button" class="delete status_btn del_btn" data-id="#">Suspend</a>
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
  <?php include 'Layout/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
</body>
</html>