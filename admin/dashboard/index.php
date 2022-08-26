<?php
include "../../config.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<?php include 'Layout/header.php'; ?>
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row ">
            <div class="col-lg-12">
                <div class="single_element">
                    <div class="quick_activity">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 bg-white" style="border-radius: 30px; padding: 100px;">
                <center>
                    <img src="https://ahmed.aetsmsoft.com/admin/welcome.svg" class="img-fluid" alt="">
                </center>
            </div>


        </div>
    </div>
</div>
<?php include 'Layout/footer.php'; ?>
</body>

</html>