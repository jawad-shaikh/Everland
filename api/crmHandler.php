<?php

header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');
// header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Methods: GET");

include("AETSMIC_Funtions.php");
$Type = $_GET["type"];
if($Type == 'Contact')
{
    if(isset($_POST["Email"]) && isset($_POST["Subject"]) && isset($_POST["message"]))
    {
        $Email = $_POST["Email"];
        $Suject = $_POST["Subject"];
        $Message = $_POST["message"];
        echo Contact($Email,$Suject,$Message);
        return;
    }
}
if($Type == "subscribe")
{
    if(isset($_POST["mail"]))
    {
        $Email = $_POST["mail"];
        echo Subscribe($Email);
        return;
    }
}

?>