
<div class="modal login-modal-pop show" id="ModalForm" tabindex="-1" style="padding-right: 17px; display: block;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Login Form -->

            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body login_wrapper">
                <form method="POST" class="log-pop-form">
                    <div class="input_wrap">
                        <label>Email address <span>*</span></label>
                        <input type="email" name="email" class="email-field" value="" required="">
                    </div>
                    <div class="input_wrap">
                        <label>Password<span>*</span></label>
                        <input type="password" name="password" class="password-field" id="id_password" value="" required="">
                    </div>
                    <small id="Msg"></small>
                    <div class="input_wrapp-2">
                        <input type="checkbox" name="remember" class="loginCheck">
                        <span>Remember me </span>
                    </div>
                    <div class="input_wrap">
                        <button type="submit" name="login">log in</button>
                    </div>
                    <div class="input_wrap">
                        <a href="forgot.php">Lost your password?</a>
                    </div>

                </form>
            </div>
            <p class="text-center">Not yet account, <a href="login.php">Signup</a></p>
        </div>
    </div>
</div>
<?php 
    $scripts .= '<script src="assets/js/own/login-pop.js"></script>';
?>