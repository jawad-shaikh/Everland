<?php 
require_once "config.php";

if (isset($_GET['login-linkedin'])) {
    require_once "linkedIn/function.php";
    redirect($linkedin_id,$linkedin_uri,$linkedin_token,$linkedin);}

if (isset($_GET['login-facebook'])) {
    require_once "facebook/function.php";
    redirect($facebook_id,$facebook_uri);}
else{
    header("location:https://".$_SERVER['SERVER_NAME']);

}
?>


