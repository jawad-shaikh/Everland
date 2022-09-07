<?php 
   session_start();
   require_once "../config.php";
   require_once "../../../PHP/config.inc.php";
   require_once "function.php";

function se(){
   header("location:https://".$_SERVER['HTTP_HOST'])."/";

}

if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $userData= getCallback($facebook_id,$facebook_secret,$facebook_uri,$code); 
    $error=dataBase($userData,$conn);
    if($error=="true"){header("location:https://".$_SERVER['SERVER_NAME']."/"."Login/?error");exit();}
    se(); exit();
} 
if (isset($_GET['error'])) {
   header("location:https://".$_SERVER['SERVER_NAME']."/"."Login/?error");exit();
} 
else{
   header("location:https://".$_SERVER['SERVER_NAME']);exit();}
?>