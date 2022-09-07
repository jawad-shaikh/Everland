<?php
include 'AETSMIC_Funtions.php';
$Type = $_GET["type"];
    if($Type == 'getAll')
    {
       $i = -1;
       if(isset($_GET["term"]))
       {
        $i = $_GET["term"];
       }
        echo getProducts($i);
        return;
    }
    if($Type == 'cart')
    {
        $SessId = $_POST["SessId"];
        $Pid = $_POST["ProductId"];
        $quan = 1;
        if(isset($_POST["quan"]))
        {
            $quan = $_POST["quan"];
        }
       // $page = $_POST["page"];
        echo AddCartItem($SessId,$Pid,$quan);
        return;
    }
    if($Type == 'getcart')
    {
        $SessId = $_POST["SessId"];
       // $page = $_POST["page"];
        echo getCartItem($SessId);
        return;
    }
    if($Type == 'delcart')
    {
        $SessId = $_POST["SessId"];
        $idx = $_POST["idx"];
        echo delCartItem($SessId,$idx);
        return;
    }
    if($Type == 'upcart')
    {
        $SessId = $_POST["SessId"];
        $idx = $_POST["idx"];
        $quantity = $_POST["quantity"];
        echo UpCartItem($SessId,$idx,$quantity);
        return;
    }
    if($Type == 'getSingleProduct')
    {
        $idx = $_POST["idx"];
        echo getSingleProduct($idx);
        return;
    }
    // if($Type == 'getSaleItems')
    // {
    //     $idx = $_POST["idx"];
    //     echo getSaleProduct();
    //     return;
    // }
?>