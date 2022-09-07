<?php
require("../PHP/config.inc.php");
if (isset($_POST['Signup'])) {

        $Email = mysqli_real_escape_string($conn, $_POST['Email']);
        $Password = mysqli_real_escape_string($conn, $_POST['Password']);
        $Remember =  $_POST['Remember'];

        function addSet($Email, $Password)
        {
                setcookie('forumEmail', $Email, time() + (10 * 365 * 24 * 60 * 60), "Login/");
                setcookie('forumPass', $Password, time() + (10 * 365 * 24 * 60 * 60), "Login/");
        }

        function removeSet($Email, $Password)
        {
                setcookie('forumEmail', $Email, time() - (86400 * 30), "Login/");
                setcookie('forumPass', $Password, time() - (86400 * 30), "Login/");
        }

        $sql = "SELECT * FROM UsersInfo WHERE UserEmail = '$Email' AND UserPass = '$Password' AND UserProvider = 'forum'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
                $userdata = mysqli_fetch_assoc($result);
                mysqli_close($conn);
                session_start();
                $UserData = array();
                $UserData['UserID'] = $userdata['UserID'];
                $UserData['UserName'] = $userdata['UserName'];
                $UserData['UserEmail'] = $userdata['UserEmail'];
                $UserData['UserProfile'] = $userdata['UserProfile'];
                $UserData['UserRole'] = $userdata['UserRole'];
                $_SESSION['userData'] = $UserData;
                if ($Remember == "set") {
                        addSet($Email, $Password);
                } else {
                        removeSet($Email, $Password);
                }

                if ($userdata['UserRole'] == "2" || $userdata['UserRole'] == "1") {
                        echo "https://" . $_SERVER['SERVER_NAME'] . "/Dashboard";
                        exit();
                } else {
                        echo "https://" . $_SERVER['SERVER_NAME'];
                        exit();
                }
        } else {
                echo "error";
                exit();
        }
} else {
        header("location:https://" . $_SERVER['SERVER_NAME'] . "/" . "Login/");
        exit();
}
