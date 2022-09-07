<?php

header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');
// header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Methods: GET");

include("AETSMIC_Funtions.php");
$Type = $_GET["type"];
if($Type == 'review')
{
    
}

?>