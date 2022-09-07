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
        <div class="row gx-5">
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 offset-xl-1">
                <h3 class="title-7">Login</h3>
                <div class="login_wrapper">
                    <form id="login">
                        <span style="color:red;" id="errMsg"></span>
                        <div class="input_wrap">
                            <label>Username or email address <span>*</span></label>
                            <input type="email" name="Email">
                            
                        </div>
                        <div class="input_wrap">
                            <label>Password<span>*</span></label>
                            <input type="password" name="Password">
                            <span class="show-pass"><i class="far fa-eye-slash"></i></span>
                        </div>
                        <div class="input_wrapp-2">
                            <input type="checkbox" name="check">
                            <span>Remember me</span>
                        </div>
                        <div class="input_wrap">
                            <button type="submit">Log in</button>
                        </div>
                        <div class="input_wrap">
                            <a href="#forgot-Password">Lost your password?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                <h3 class="title-7">register</h3>
                <div class="login_wrapper login_wrapper_2">
                    <form id="signup">
                        <div class="input_wrap">
                            <label>Full Name<span>*</span></label>
                            <input type="text" name="FullName">
                        </div>
                        <div class="input_wrap">
                            <label>Email address<span>*</span></label>
                            <input type="email" name="Email">
                        </div>
                        <!-- input_wrap_3 -->
                        <div class="input_wrap">
                        <label>Password<span>*</span></label>
                            <input type="password" name="Password">
                        </div>
                        <div class="input_wrap input_wrap_3">
                            <span class="mb-10 pt-15">A Verification Link will be sent to you on email address.</span>
                            <p class="mb-30">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 offset-xl-1" id="forgot-Password">
                <h3 class="title-7">Forget Password</h3>
                <div class="login_wrapper">
                    <form id="fp">
                        <span style="color:red;" id="errMsg"></span>
                        <div class="input_wrap">
                            <label>Username or email address <span>*</span></label>
                            <input type="email" name="email">
                            
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
<?php
$scripts .= '<script src="assets/js/own/LoginSignupHandler.js"></script>';
?>
<?php include './partials/footer.php' ?>

</html>