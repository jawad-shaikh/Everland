<?php

include 'db.php';

function getSingleProduct($idx)
{
    global $conn;
   $query = 'select p.*,i.image,i.isMainImage,(CASE WHEN CURDATE() >= p.start_date and CURRENT_DATE < p.end_date and p.discount_type IN (1,2) THEN CASE WHEN p.discount_type = 1 THEN p.price - (p.price * (p.discount_price / 100)) ELSE (p.price - p.discount_price) END ELSE p.price END) as DCPrice, CASE WHEN CURDATE() >= p.start_date and CURRENT_DATE < p.end_date THEN 1 ELSE 0 END as sale from product as p inner join product_images as i on p.id = i.product_id where p.id = ?';
   $stmt = $conn->prepare($query);
   $stmt->bind_param("i",$idx);
   if ($stmt->execute()) {
    $result = $stmt->get_result();
    $MainRes = array();
    $first = true;
    while($row = $result->fetch_assoc())
    {
        $Json1 = GetOtherKeysValuesInJson(array("id","title","image","price","DCPrice","description","sale","isMainImage"),array($row["id"],$row["title"],$row["image"],$row["price"],$row["DCPrice"],$row["description"],$row["sale"],$row["isMainImage"]));
        // if($first)
        // {
        //     $first = false;
        //     echo $Json1;
        // }
        $i = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $Json1), true );
        //$i = json_decode($Json1);
        array_push($MainRes, $i);
    }
    return json_encode($MainRes);
   }
   return  GetStatusJson("0");
}

function UpCartItem($SessId,$idx,$quantity)
{
    global $conn;
   $query = 'update cartRohaanic set quantity = ? where SessionId = ? and idx = ?';
   $stmt = $conn->prepare($query);
   $stmt->bind_param("isi",$quantity,$SessId ,$idx);

   if ($stmt->execute()) {
    return  GetStatusJson("1");
   }
}
function delCartItem($SessId,$idx)
{
    global $conn;
   $query = 'delete from cartRohaanic where SessionId = ? and idx = ?';
   $stmt = $conn->prepare($query);
   $stmt->bind_param("si",$SessId ,$idx);

   if ($stmt->execute()) {
    return  GetStatusJson("1");
   }
}
function getCartItem($SessId)
{
    global $conn;
   $query = 'SELECT p.id as iid,c.*,p.*,im.image,(CASE WHEN CURDATE() >= p.start_date and CURRENT_DATE < p.end_date and p.discount_type IN (1,2) THEN CASE WHEN p.discount_type = 1 THEN p.price - (p.price * (p.discount_price / 100)) ELSE (p.price - p.discount_price) END ELSE p.price END) as DCPrice, CASE WHEN CURDATE() >= p.start_date and CURRENT_DATE < p.end_date THEN 1 ELSE 0 END as sale from cartrohaanic as c INNER JOIN product as p on c.productId = p.id INNER JOIN usercreds u on u.idx = c.userId inner JOIN product_images im on im.product_id = p.id WHERE im.isMainImage = 1 and u.SessionId = ?;';
   $stmt = $conn->prepare($query);
   $stmt->bind_param("s",$SessId);
   if ($stmt->execute()) {
    $result = $stmt->get_result();
    $MainRes = array();
    $first = true;
    while($row = $result->fetch_assoc())
    {
        $Json1 = GetOtherKeysValuesInJson(array("id","quantity","sale","DCPrice","title","image","idx"),array($row["iid"],$row["quantity"],$row["sale"],$row["DCPrice"],$row["title"],$row["image"],$row["idx"]));
        // if($first)
        // {
        //     $first = false;
        //     echo $Json1;
        // }
        $i = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $Json1), true );
        //$i = json_decode($Json1);
        array_push($MainRes, $i);
    }
    return json_encode($MainRes);
   }
   return  GetStatusJson("0");
}
function AddCartItem($SessId,$productId,$quantity)
{
    global $conn;
   $json =  GetAlldetailsFromSessionId($SessId);
   $userId = json_decode($json)->idx;
   $query = 'select * from cartRohaanic where SessionId = ? and userId = ? and productId = ?;';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sii", $SessId,$userId,$productId);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc())
        {
            return  GetStatusJson("0");
        }
    }
   $query = 'insert into cartRohaanic values(null,?,?,?,?)';
   $stmt = $conn->prepare($query);
   $stmt->bind_param("issi",$userId ,$SessId, $productId,$quantity);

   if ($stmt->execute()) {
    return  GetStatusJson("1");
   }
   return  GetStatusJson("0");
}

function getProducts($term)
{
    global $conn;
    $termed = '';
    if($term != -1 || $term != "-1")
    {
        $termed = ' and p.title like \'%%'.$term.'%%\'';
    }
    $query = 'SELECT p.*,i.image, (CASE WHEN CURDATE() >= p.start_date and CURRENT_DATE < p.end_date and p.discount_type IN (1,2) THEN CASE WHEN p.discount_type = 1 THEN p.price - (p.price * (p.discount_price / 100)) ELSE (p.price - p.discount_price) END ELSE p.price END) as DCPrice, CASE WHEN CURDATE() >= p.start_date and CURRENT_DATE < p.end_date THEN 1 ELSE 0 END as sale from product as p inner join product_images as i on p.id = i.product_id WHERE i.isMainImage = ?'.$termed.' group by i.product_id;';
    $stmt = $conn->prepare($query);
    $o = 1;
    $stmt->bind_param("i", $o);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $MainRes = array();
        $first = true;
        while($row = $result->fetch_assoc())
        {
            $Json1 = GetOtherKeysValuesInJson(array("id","title","image","price","DCPrice","description","sale"),array($row["id"],$row["title"],$row["image"],$row["price"],$row["DCPrice"],$row["description"],$row["sale"]));
            // if($first)
            // {
            //     $first = false;
            //     echo $Json1;
            // }
            $i = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $Json1), true );
            //$i = json_decode($Json1);
            array_push($MainRes, $i);
        }
        return json_encode($MainRes);
    }
    return 	GetOtherKeysValuesInJson(array("Status"),array("0"));
}









function GetAlldetailsFromSessionId($SessionId)
{
    global $conn;
    $query = 'select u.*,(select COUNT(*) FROM cartrohaanic WHERE SessionId = u.SessionId) as bagItem from UserCreds as u where u.SessionId = ? and u.IsEmailVerified = 1';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $SessionId);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc())
        {
            return	GetOtherKeysValuesInJson(array("idx","FullName","Email","bagItem","Status"),array($row["idx"],$row["FullName"],$row["Email"],$row["bagItem"],"1"));
        }
    }
    return 	GetOtherKeysValuesInJson(array("Status"),array("0"));
}
function GetAlldetailsFromEmail($Email)
{
    global $conn;
    $query = 'select * from UserCreds where Email = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $Email);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc())
        {
            return GetOtherKeysValuesInJson(array("idx","FullName","Email"),array($row["idx"],$row["FullName"],$row["Email"]));
        }
        GetOtherKeysValuesInJson(array("ERROR"),array("On Function GetAlldetailsFromEmail"));
    }
}
function Login($Username, $Password)
{
    global $conn;
    $query = 'select * from UserCreds where Email = ? and IsEmailVerified = 1';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $Username);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            if ($row["Password"] == $Password) {
                return GetOtherKeysValuesInJson(array("SessionId", "Status"), array($row["SessionId"], "1"));
            } else {
                return GetOtherKeysValuesInJson(array("Status","Reason"), array("0","Invalid Username Or Password"));
            }
        }
        return GetOtherKeysValuesInJson(array("Status","Reason"), array("0","Invalid Username Or Password"));
    }
    return GetOtherKeysValuesInJson(array("Status","Reason"), array("0","Invalid Username Or Password"));
}
function SignUp($Username, $Password,$FullName)
{
    global $conn;
    $query = 'select * from UserCreds where Email = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $Username);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc())
        {
            return 	GetOtherKeysValuesInJson(array("status","Reason"),array("0","Email Already Exist"));
        }
    }

    $SessId = GenerateSessionId();
    $query = 'insert into UserCreds values(null,?,?,?,?,0)';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss",$FullName ,$Username, $Password,$SessId);

    if ($stmt->execute()) {
        $hed = 'MIME-Version: 1.0' . "\r\n";
        $hed .= 'From: contact@aetsmsoft.com' . "\r\n";
        $hed .= 'Return-Path: contact@aetsmsoft.com'."\r\n";
        $hed .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
        mail($Username, "Verification Required For EverLand Account", "Click on the Link To verify Your Acount ".$_SERVER['HTTP_HOST'].'/api/LoginHandler.php?type=verify&SessionId='.$SessId, $hed);

        return GetStatusJson("1");
    }
    return GetStatusJson("-1");
}
//POORA
function VerifyUser($Session_Id)
{
    global $conn;
    $query = 'select * from UserCreds where SessionId = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $Session_Id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $res = false;
        while($row = $result->fetch_assoc())
        {
           $res = true;
        }
        if($res == true)
        {
            $query = 'Update UserCreds set IsEmailVerified = 1  where SessionId = ?';
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $Session_Id);
            if ($stmt->execute()) {
                echo $row['idx'];
                return GetStatusJson("true");
            }
        }
    }
    return GetStatusJson("false");
}
function ChangePassword($Session,$Password,$OldPassword)
{
    global $conn;
    $query = 'Update UserCreds set Password = ? and SessionId = ?  where SessionId = ? and Password = ?';
    $stmt = $conn->prepare($query);
    $Session = uniqid();
    $stmt->bind_param("sss", $Password,$Session,$OldPassword);
    if ($stmt->execute()) {
        return GetStatusJson("true");
    }
}
function ForgetPasswordInitiator($Email,$Password)
{
    if(verifyEmailAlreadyExist($Email) == 1)
    {
        $SessionId = insertIntoFpLogs($Email,$Password);
        $hed = 'MIME-Version: 1.0' . "\r\n";
        $hed .= 'From: contact@aetsmsoft.com' . "\r\n";
        $hed .= 'Return-Path: contact@aetsmsoft.com'."\r\n";
        $hed .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
        mail($Email, "Verification Required For Ever Land", "Click on the Link To verify Your Acount ".$_SERVER['HTTP_HOST'].'/api/LoginHandler.php?type=forgetpass2&SessionId='.$SessionId, $hed);
        return GetStatusJson("1");
    }
    return GetStatusJson("0");
}
function ForgetPassword($Session_Id)
{
    global $conn;
    $query = 'select * from ForgetPasswordLogs where SessionId = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $Session_Id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc())
        {
            $idx = $row["idx"];
            $Password = $row["NewPassword"];
            $Session_Id = uniqid();
            $query = 'Update UserCreds set Password = ? and SessionId = ?  where idx = '.$idx;
            $stmt = $conn->prepare($query);
            $Session = uniqid();
            $stmt->bind_param("ss", $Password,$Session_Id);
            if ($stmt->execute()) {
                return "Password Changed Successfully";
            }
        }
    }
}
function insertIntoFpLogs($Email,$Password){
    global $conn;
    $SessId = uniqid();
    $json = json_decode(GetAlldetailsFromEmail($Email));
    $query = 'insert into ForgetPasswordLogs values(null,?,'.$json->idx.',?)';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss",$Password ,$SessId);
    if ($stmt->execute()) {
        return $SessId;
    }
    return 0;
}
function verifyEmailAlreadyExist($Email)
{
    global $conn;
    $query = 'select * from UserCreds where Email = ? and IsEmailVerified = 1';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $Email);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc())
        {
            return 1;
        }
        return 0;
    }
    return "Error";
}
function GenerateSessionId()
{
    return uniqid();
}
function GetStatusJson($value){
    return '{"status":"'.$value.'"}';
}

function GetOtherKeysValuesInJson($names = array(),$values = array())
{
if(sizeof($names) == sizeof($values))
{
    $Json =  '{';
        for($i = 0; $i< sizeof($names); $i++)
        {
            $Json .= '"'.$names[$i].'":';
            $Json .= '"'.$values[$i].'",';
            
        }
        $Json = rtrim($Json, ",");
    $Json .= '}';
    return $Json;
}
else{
    throw "ERROR";
}
}