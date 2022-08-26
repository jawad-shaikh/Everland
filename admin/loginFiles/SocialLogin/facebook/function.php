<?php

function  redirect($facebook_id,$facebook_uri){      
    header("location :https://www.facebook.com/v12.0/dialog/oauth?client_id={$facebook_id}&redirect_uri={$facebook_uri}&state=987654321");
}

function get_access_token($url, $parameters){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = [];
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    return $result;
}

function fetch_user_data($token) {

    $url = "https://graph.facebook.com/me?fields=id,name,email,picture&access_token={$token}";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);

    $result = curl_exec($ch);
    $userInfo = json_decode($result);

    $inUserData = array();
    $inUserData['UserProvider'] = 'facebook';
    $inUserData['UserID']  = !empty($userInfo->id)?$userInfo->id:'';
    $inUserData['UserName'] = !empty($userInfo->name)?$userInfo->name:'';
    $inUserData['UserEmail'] = !empty($userInfo->email)?$userInfo->email:'';
    $inUserData['UserProfile']  = !empty($userInfo->picture->data->url)?$userInfo->picture->data->url:'';

    $userData = $inUserData;
    return $userData;
    
}

function getCallback($client_id,$client_secret,$redirect_uri,$code){
    $url = "https://graph.facebook.com/v12.0/oauth/access_token?"; 
    $params = [
        'redirect_uri' => $redirect_uri,
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $code,
    ];
    $accessToken = get_access_token($url,http_build_query($params));
    $accessToken = json_decode($accessToken)->access_token;
    $userData = fetch_user_data($accessToken);   
    return  $userData;
}

function dataBase($result,$conn){  
    $error="";
    $UserID=$result['UserID'];  
    $UserProvider=$result['UserProvider'];
    $alreadyExists = "SELECT * FROM UsersInfo WHERE UserID='$UserID' AND UserProvider = '$UserProvider'";
    $existsData = mysqli_query($conn, $alreadyExists);
    if (mysqli_num_rows($existsData) > 0) {
        $userdata = mysqli_fetch_assoc($existsData);
         mysqli_close($conn);
                $UserData = array();
                $UserData['UserID'] = $userdata['UserID'];
                $UserData['UserName'] = $userdata['UserName'];
                $UserData['UserEmail'] = $userdata['UserEmail'];
                $UserData['UserRole'] = $userdata['UserRole'];
                $UserData['UserProfile'] = $userdata['UserProfile'];
                $_SESSION['userData'] = $UserData;
        }
    else{
        $sql = "INSERT INTO UsersInfo (UserProvider,UserID, UserName, UserEmail, UserProfile, UserRole, created)
        VALUES ('".$result['UserProvider']."', '".$result['UserID']."',
         '".$result['UserName']."','".$result['UserEmail']."','".$result['UserProfile']."','0', NOW())";
                if (mysqli_query($conn, $sql)) {
                    $UserData = array();
                    $UserData['UserID'] = $result['UserID'];
                    $UserData['UserName'] = $result['UserName'];
                    $UserData['UserEmail'] = $result['UserEmail'];
                    $UserData['UserRole'] = '0';
                    $UserData['UserProfile'] = $result['UserProfile'];
                    $_SESSION['userData'] = $UserData;
                } else {
                    $error = "true";
                }
        }
    return $error;
}
?>