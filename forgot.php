<!doctype html>
<html class="no-js" lang="">
<?php
$isAuth = false;
?>
<?php include './partials/header.php' ?>

<?php include './components/searchPopup.php' ?>

<?php include './components/sidebar.php' ?>

<?php include './components/cart.php' ?>

<div class="login_register_area">
    <div class="container">
        <div class="row d-flex justify-content-center align-center">
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 offset-xl-1" id="forgot-Password">
                <div class="login_wrapper">
                <h3 class="title-7 text-center">Forget Password</h3>
                    <form id="fp">
                        <span style="color:red;" id="errMsg"></span>
                        <div class="input_wrap">
                            <!-- <label>Username or email address <span>*</span></label> -->
                            <input type="email" name="email" placeholder="Enter Your Email Address">
                            
                        </div>
                        <div class="input_wrap">
                            <button type="submit">Forgot Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './partials/footer.php' ?>

</html>