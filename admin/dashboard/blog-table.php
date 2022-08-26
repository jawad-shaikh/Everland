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

                                    <div class="add_button ml-10">
                                        <a href="blog-form.php" class="btn_1">Add New</a>
                                    </div>
                                </div>
                            </div>

                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Title</th>
                                                <th scope="col">View</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = " SELECT * FROM blog ";
                                        $run = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($run)) {
                                            $id = $row['id'];
                                            $img = $row['img'];
                                            $admin = $row['author'];
                                            $title = $row['title'];

                                        ?>
                                            <tr>
                                                <td><?= $id ?></td>
                                                <td><img src="<?= $img ?>" width="50"></td>
                                                <td><?= $admin ?></td>
                                                <td><?= $title ?></td>
                                                <td><a type="button" style="background-color:#F7E560;" class="status_btn view_blog" id="<?= $id ?>">View</a></td>
                                                <td><a href="blog-edit.php?Id=<?= $id ?>" class="status_btn edit_btn">Edit</a></td>
                                                <td><a type="button" class="delete status_btn del_btn" data-id="<?= $id ?>">Delete</a></td>
                                                
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
        if (confirm(" Are you sure you want to delete this Blog?")) {
            var blog_id = $(this).data("id");
            var element = this;
            $.ajax({
                url: "blog-delete.php",
                type: "POST",
                data: {
                    id: blog_id
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


<script>

  //View modal script for Blog, catch data from view_blog.php
    $(document).ready(function(){
      $('.view_blog').click(function(e){
        var post_id = $(this).attr("id");
        $.ajax({
      url:"view-blog.php",
      type:"post",
      data:{post_id:post_id},
      success:function(data){
        $('#info_view').html(data);
        $('#BlogModal').modal("show");
      }
    });
        
  })          
  
});
// End Script..
    </script>
<?php include 'Layout/footer.php'; ?>

</body>

</html>