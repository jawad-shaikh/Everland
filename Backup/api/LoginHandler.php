<?php 

header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');
// header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Methods: GET");

include("AETSMIC_Funtions.php");
$Type = $_GET["type"];
if($Type == 'Signup')
{
    $FullName = $_POST["FullName"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    if(isset($FullName) && isset($Email) && isset($Password))
    {
        echo SignUp($Email,$Password,$FullName);
        return;
    }
}
else if($Type == 'verify')
{
    //WILL BE SEEN BY USER
    $SessionId = $_GET["SessionId"];
    if(isset($SessionId))
    {
      $json = json_decode(VerifyUser($SessionId));
      if($json->status == "true")
      {
        header('Location: http://spyware.aetsmsoft.com/login');
      }
       return;
    }
}
else if($Type == 'Auth')
{
    $SessionId = $_POST["SessionId"];
    echo GetAlldetailsFromSessionId($SessionId);
    return;
}
else if($Type == 'verifyU')
{
    $SessionId = $_GET["SessionId"];
    if(isset($SessionId))
    {
      echo json_decode(VerifyUser($SessionId));
       return;
    }
}
else if($Type == 'Login')
{
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    if(isset($Email) && isset($Password))
    {
        //echo $Email.'&pass='.$Password;
        echo Login($Email,$Password);
        return;
    }
}
else if($Type == 'ForgetPassword')
{
    if(isset($_POST["SessionId"]))
    {
        $SessionId =  $_POST["SessionId"];
        $NewPassword = $_POST["NewPassword"];
        $OldPassword = $_POST["Password"];
        echo ChangePassword($SessionId,$NewPassword,$OldPassword);
        return;
    }
    else{
        $NewPassword = $_POST["Password"];
        $Email = $_POST["Email"];
        if(isset($NewPassword) && isset($Email))
        {
           echo ForgetPasswordInitiator($Email,$NewPassword);
           return;
        }
    }


}
else if($Type = 'forgetpass2')
{
    //WEBPAGE CAN BE SEEN BY USER
    $SessionId = $_GET["SessionId"];
    echo ForgetPassword($SessionId);
    header('Location: ../../login');
}
?>