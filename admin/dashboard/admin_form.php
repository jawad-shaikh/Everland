<?php
include "../../config.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../');
}else{
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
                                <h3 class="m-0">Create New Admin</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="card-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputAddress">UserName</label>
                                    <input type="text" name="username" class="form-control" id="inputAddress" placeholder="Enter UserName" required>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Email</label>
                                    <input type="text" name="email" class="form-control" id="inputAddress" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Profile Image(PNG,JPG,JPEG)</label>
                                    <input type="file" name="img" class="form-control" id="inputAddress" placeholder="Enter Image">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Password</label>
                                    <input type="Password" name="password" class="form-control" id="inputAddress" placeholder="Enter Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Permission</label>
                                    <select id="inputState" name="permission" class="form-control" required>
                                        <option value="">Choose...</option>
                                        <option value="1">Full Control</option>
                                        <option value="2">Restricted Control</option>
                                    </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
                            </form>
                        </div>
                        <?php

                        if (isset($_POST['submit'])) {
                            $user = mysqli_real_escape_string($con, $_POST['username']);
                            $email = mysqli_real_escape_string($con, $_POST['email']);
                            $pass = mysqli_real_escape_string($con, $_POST['password']);
                            $per = mysqli_real_escape_string($con, $_POST['permission']);
                            
                            if ($per=='1') {
                                $is_admin=1;
                            }
                            elseif ($per=='2') {
                                $is_admin=2;
                            }
                            $emailcheck = "SELECT * FROM admin WHERE email='$email' and is_admin in (0,1,2)";
                            $emQuery = mysqli_query($con, $emailcheck);
                            $emCount = mysqli_num_rows($emQuery);
                            if ($emCount > 0) {
                        ?>
                                <div class="alert alert-danger" role="alert">
                                    Email You Enter is Already Exists
                                </div>
                                <?php
                            } else {

                                $file = $_FILES['img'];
                                $filename = $file['name'];
                                $filepath = $file['tmp_name'];
                                $fileerror = $file['error'];
                                $file_ext = pathinfo($filename, PATHINFO_EXTENSION);
                                $extension = array("jpeg","JPEG","jpg","JPG","png","PNG");
                                if ($_FILES['img']['name'] !='') {
                                    if (in_array($file_ext, $extension) === false) { ?>
                                    <div class="alert alert-danger" role="alert">
                                          Error! File image extension not match to jpeg, jpg, png
                                        </div>
                                  <?php }else{
                                              if($fileerror == 0){
                                                $destfile = 'admin-profile/'.$filename;
                                                move_uploaded_file($filepath, $destfile);
                                                
                                                }
                                            }
                                }
                                  

                                $insertquery = " INSERT INTO admin(username,email,password,is_admin,profile) VALUES('$user','$email','$pass',$is_admin,'$destfile') ";
                                $query = mysqli_query($con, $insertquery);
                                if ($query) {
                                ?>
                                    <script>
                                        window.location.href = "admin_table.php";
                                    </script>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Account Not Created Successfully
                                    </div>
                        <?php  }
                        }
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