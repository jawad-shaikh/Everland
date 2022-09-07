<?php
include '../api/db.php';
if (isset($_POST['login'])) {
    session_start();
    $email = $_POST['email'];
    $pass =  $_POST['password'];
    $switch = false;

    $query = 'SELECT * FROM `admin` WHERE email=? and password=?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email,$pass);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc())
        {
           if($pass == $row["password"])
           {
            $is_admin = $row['is_admin'];   
            if (isset($_POST['remember'])) {
                setcookie('gotositeemailcookie', $email, time() + (10 * 365 * 24 * 60 * 60));
                setcookie('gotositepasswordcookie', $pass, time() + (10 * 365 * 24 * 60 * 60));
            }
            $_SESSION['email'] = $email;
            $_SESSION['is_admin'] = $is_admin;
            header('location: dashboard/');
           }
        }
    }





    // $sql = " SELECT * FROM `admin` WHERE email='$email' and password='$pass'";
    // $result = mysqli_query($con, $sql);
    // $row = mysqli_fetch_array($result);
    // $is_admin = -1;
    // if (mysqli_num_rows($result) == 1) {
        
    // } else {
?>
        <div style="position: absolute; width: 100%;" class="alert alert-danger" role="alert">
            Login Error! email / Password incorrect.
        </div>
<?php
    //}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GOTO - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../assets/img/logo/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginFiles/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginFiles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginFiles/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginFiles/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginFiles/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginFiles/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginFiles/css/util.css">
    <link rel="stylesheet" type="text/css" href="loginFiles/css/main.css">
    <!--===============================================================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
    <style>
        * {
            user-select: none
        }

        .label-checkbox100::before {
            border: 2px solid #202227;
        }
    </style>
</head>

<body style="background-color: #FAFAFA;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30" style="transform: scale(0.7); background-color: #FFFFFF; border: 1px solid #DBDBDB;">
                <form class="login100-form validate-form" action="#" method="POST" autocomplete="off">
                    <span class="login100-form-title on_homepage p-b-55" style="color: black;cursor: pointer;">
                        <img src="../assets/img/logo/logo-1.png" width="100">
                        <!-- WELCOME! ADMIN -->
                    </span>

                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100 email" type="email" name="email" placeholder="Email" value="<?php if (isset($_COOKIE['gotositeemailcookie'])) {echo $_COOKIE['gotositeemailcookie'];} ?>" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100 password" type="password" name="password" placeholder="Password" value="<?php if (isset($_COOKIE['gotositepasswordcookie'])) {echo $_COOKIE['gotositepasswordcookie'];} ?>" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>

                    <div class="contact100-form-checkbox m-l-4">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <div class="container-login100-form-btn p-t-25">
                        <button style="background-color: #202227;" class="login100-form-btn" type="submit" name="login">
                            Login
                        </button>
                    </div>
                    <div class="text-center w-full pt-3"><br><br></div>


                </form>
            </div>
        </div>
    </div>
    <!--===============================================================================================-->
    <script src="loginFiles/vendor/bootstrap/js/popper.js"></script>
    <script src="loginFiles/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="loginFiles/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
</body>

</html>