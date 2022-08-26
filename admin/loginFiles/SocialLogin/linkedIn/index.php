<?php 
   session_start();
   require_once "../config.php";
   require_once "../../../PHP/config.inc.php";
   require_once "function.php";

   if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $userData=getCallback($linkedin_id,$linkedin_secret,$linkedin_uri,$code);
    $error=dataBase($userData,$conn);
    if($error=="true"){header("location:https://".$_SERVER['SERVER_NAME']."/"."Login/?error");exit();}
    header("location:https://".$_SERVER['SERVER_NAME']);} 


    if (isset($_GET['error'])) {
        header("location:https://".$_SERVER['SERVER_NAME']."/"."Login/?error");
     } 
     else{
        header("location:https://".$_SERVER['SERVER_NAME']);
     }
    
?>