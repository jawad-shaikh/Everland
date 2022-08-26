<?php
include "../../config.php";
session_start();

$ide = $_GET['Id'];
$sql = "SELECT * FROM admin WHERE id=$ide";
$run = mysqli_query($con, $sql);
$row = mysqli_fetch_array($run);
$U_id = $row['id'];
$uname = $row['username'];
$email = $row['email'];
$password = $row['password'];
//$img = $row['profile'];
$profile = $row['profile'];
if (!isset($_SESSION['email'])) {
    header('location: ../');
}
else{
   $permission = $_SESSION['is_admin']; 
}
if ($permission == 2) {
    header("location: javascript://history.go(-1)");
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
                                <h3 class="m-0">Edit Admin data</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="card-body">
                            
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputAddress">UserName</label>
                                    <input type="text" name="username" value="<?= $uname ?>" class="form-control" id="inputAddress" placeholder="Enter username For Blog">
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Email</label>
                                    <input type="text" name="email" value="<?= $email ?>" class="form-control" id="inputAddress" placeholder="Enter Email For Blog">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Profile Image(PNG,JPG,JPEG)</label>
                                    <input type="file" name="img" class="form-control" id="inputAddress" value="<?= $profile ?>" placeholder="Enter Image">
                                    <input type="hidden" name="img_old" value="<?= $profile ?>">
                                    <img src="<?= $profile ?>" width="200" class="img-fluid">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Password</label>
                                    <input type="Password" name="password" value="<?= $password ?>" class="form-control" id="inputAddress" placeholder="Enter Password For Blog">
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Permission</label>
                                    <select id="inputState" name="permission" class="form-control" required>
                                        <option value="">Choose...</option>
                                        <option value="1">Full Control</option>
                                        <option value="2">Restricted Control</option>
                                    </select>
                                </div>
                                <button type="submit" name="User_edit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                        <?php

                        if (isset($_POST['User_edit'])) {
                            $username = mysqli_real_escape_string($con, $_POST['username']);
                            $email = mysqli_real_escape_string($con, $_POST['email']);
                            $password = mysqli_real_escape_string($con, $_POST['password']);
                            $per = mysqli_real_escape_string($con, $_POST['permission']);
                            if ($per=='1') {
                                $is_admin=1;
                            }
                            elseif ($per=='2') {
                                $is_admin=2;
                            }
                            $file_old = $_POST['img_old'];

                            if ($_FILES['img']['name'] !='') {
                            $filename = $_FILES['img']['name'];
                            $filepath = $_FILES['img']['tmp_name'];
                            $destfile = 'admin-profile/'.$_FILES['img']['name'];
                            $file_ext = pathinfo($filename, PATHINFO_EXTENSION);
                            $extension = array("jpeg","JPEG","jpg","JPG","png","PNG");

                                if (in_array($file_ext, $extension) === false) {
                                 ?>
                                    <div class="alert alert-danger" role="alert">
                                          Error! In "image" File extension not match to jpeg, jpg, png
                                        </div>
                                  <?php die();
                                  }
                            }
                             else {
                                     $filename = $file_old;
                                     $destfile = $filename;
                                  }
                            $insertquery = " UPDATE admin SET username='$username', email='$email', password='$password', is_admin='$is_admin', profile='$destfile' WHERE Id=$ide ";
                            $query = mysqli_query($con, $insertquery);
                            if ($query) {
                                if ($_FILES['img']['name'] !='') {
                                 move_uploaded_file($filepath, $destfile);
                                 if ($file_old!='') {
                                     unlink($file_old);
                                 }
                                 
                                }
                        ?>
                                <script>
                                    window.location.href = "admin_table.php";
                                </script>

                            <?php } else { ?>
                                <div class="alert alert-danger" role="alert">
                                  Admin Profile Not Updated Successfully
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
</body>


</html>