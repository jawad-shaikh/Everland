<!doctype html>
<html class="no-js" lang="">

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
                    <form action="#">
                        <div class="input_wrap">
                            <label>Username or email address <span>*</span></label>
                            <input type="email">
                        </div>
                        <div class="input_wrap">
                            <label>Password<span>*</span></label>
                            <input type="email">
                            <span class="show-pass"><i class="far fa-eye-slash"></i></span>
                        </div>
                        <div class="input_wrapp-2">
                            <input type="checkbox" name="check">
                            <span>Remember me </span>
                        </div>
                        <div class="input_wrap">
                            <button type="submit">log in</button>
                        </div>
                        <div class="input_wrap">
                            <a href="#">Lost your password?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                <h3 class="title-7">register</h3>
                <div class="login_wrapper login_wrapper_2">
                    <form action="#">
                        <div class="input_wrap">
                            <label>Email address<span>*</span></label>
                            <input type="email">
                        </div>
                        <div class="input_wrap input_wrap_3">
                            <span class="mb-10 pt-15">A password will be sent to your email address.</span>
                            <p class="mb-30">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                            <button type="submit">register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './partials/footer.php' ?>

</html>