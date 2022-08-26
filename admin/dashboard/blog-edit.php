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
                            <?php
                            $ide = $_GET['Id'];
                            $sql = "SELECT * FROM blog WHERE id=$ide";
                            $run_blog = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($run_blog);
                            $id = $row['id'];
                            $img = $row['img'];
                            $title = $row['title'];
                            $description = $row['description'];
                            ?>
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputAddress">Blog image(PNG,JPG,JPEG)</label>
                                    <input type="file" name="img" class="form-control" id="inputAddress" value="<?= $img ?>" placeholder="Enter Image">
                                    <input type="hidden" name="img_old" value="<?= $img ?>">
                                    <img src="<?= $img ?>" width="200" class="img-fluid">
                                </div>
                                <img src="<?= $image ?>" width="200">
                                <div class="form-group">
                                    <label for="inputAddress">Title</label>
                                    <input type="text" name="title" value="<?= $title ?>" class="form-control" id="inputAddress" placeholder="Enter Title For Blog">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Description</label>
                                    <textarea id="tiny" name="description"><?= $description ?></textarea>
                                </div>


                                <button type="submit" name="blog_update" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                        <?php

                        if (isset($_POST['blog_update'])) {
                            
                            $title = mysqli_real_escape_string($con, $_POST['title']);
                            $desc = mysqli_real_escape_string($con, $_POST['description']);
                            $file_old = $_POST['img_old'];

                            if ($_FILES['img']['name'] !='') {
                            $filename = $_FILES['img']['name'];
                            $filepath = $_FILES['img']['tmp_name'];
                            $destfile = 'blog-images/'.$_FILES['img']['name'];
                            $file_ext = pathinfo($filename, PATHINFO_EXTENSION);
                            $extension = array("jpeg","JPEG","jpg","JPG","png","PNG");

                                if (in_array($file_ext, $extension) === false) {
                                 ?>
                                    <div class="alert alert-danger" role="alert">
                                          Error! In "img" File extension not match to jpeg, jpg, png
                                        </div>
                                  <?php die();
                                  }
                            }
                             else {
                                     $filename = $file_old;
                                     $destfile = $filename;
                                  }
                            $Updatequery = " UPDATE blog SET title='$title', description='$desc', img='$destfile' WHERE id=$ide ";
                            $query = mysqli_query($con, $Updatequery);
                            if ($query) {
                                if ($_FILES['img']['name'] !='') {
                                 move_uploaded_file($filepath, $destfile);
                                 unlink($file_old);
                                }
                                    ?>
                                <script>
                                    window.location.href = "blog-table.php";
                                </script>
                                <?php
                                 
                        } else { ?>
                                <div class="alert alert-danger" role="alert">
                                    Blog Not Uploaded Successfully
                                </div>
                        <?php  }
                        }


                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'Layout/footer.php'; ?>
<script src="../../lib/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#tiny',
        height: 450,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace',
            'visualblocks', 'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
    });
</script>
</body>

</html>