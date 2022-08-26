 <?php
include "../../config.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../');
}
?>
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
                                        <div class="search_inner">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM users";
                                        $run = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($run)) {
                                            $id = $row['id'];
                                            $name = $row['username'];
                                            $email = $row['email'];
                                        ?>
                                            <tr>
                                                <td><?= $id ?></td>
                                                <td><?=$name ?></td>
	                                            <td><?=$email ?></td>
                                                <td><a type="button" class="delete status_btn del_btn" data-id="<?= $id ?>">Suspend</a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">

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
  <!-- Modal end -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).on("click", ".delete", function() {
        if (confirm("Are you sure you want to suspend this user account?")) {
            var category_id = $(this).data("id");
            var element = this;
            $.ajax({
                url: "users-delete.php",
                type: "POST",
                data: {
                    id: category_id
                },
                success: function(data) {
                    if (data == 1) {
                        $(element).closest("tr").fadeOut();
                    } else {
                        $("#error-message").html("Can't Detele Data").slideDown();
                        $("#success-message").slideup();
                    }
                }
            });
        }

    });
</script>


<?php include 'Layout/footer.php'; ?>

</body>

</html>