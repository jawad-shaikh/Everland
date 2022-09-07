
<div class="modal login-modal-pop fade hide" id="ModalForm" tabindex="-1" style="padding-right: 17px; display: block;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Login Form -->

            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body login_wrapper">
                <form method="POST">
                    <div class="input_wrap">
                        <label>Email address <span>*</span></label>
                        <input type="email" name="email" value="" required="">
                    </div>
                    <div class="input_wrap">
                        <label>Password<span>*</span></label>
                        <input type="password" name="password" id="id_password" value="" required="">
                        <span class="show-pass"><i class="far fa-eye" id="togglePassword"></i></span>
                    </div>
                    <div class="input_wrapp-2">
                        <input type="checkbox" name="remember">
                        <span>Remember me </span>
                    </div>
                    <div class="input_wrap">
                        <button type="submit" name="login">log in</button>
                    </div>
                    <div class="input_wrap">
                        <a href="#">Lost your password?</a>
                    </div>

                </form>
            </div>
            <p class="text-center">Not yet account, <a href="#">Signup</a></p>
        </div>
    </div>
</div>