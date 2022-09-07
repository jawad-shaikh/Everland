<?php 

    function redirect($client_id,$redirect_uri,$csrf_token,$scopes){
        header("location : https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}");
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

        $url = 'https://api.linkedin.com/v2/me?projection=(id,firstName,lastName,profilePicture(displayImage~:playableStreams))';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $headers = [];
        $headers[] = "Authorization: Bearer {$token}";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        $userInfo = json_decode($result);


        $url = 'https://api.linkedin.com/v2/emailAddress?q=members&projection=(elements*(handle~))';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $headers = [];
        $headers[] = "Authorization: Bearer {$token}";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $email = curl_exec($ch);
        $userEmail = json_decode($email);

        $inUserData = array();
        $inUserData['UserProvider'] = 'linkedin';
        $inUserData['UserID']  = !empty($userInfo->id)?$userInfo->id:'';
		$inUserData['UserFname'] = !empty($userInfo->firstName->localized->en_US)?$userInfo->firstName->localized->en_US:'';
		$inUserData['UserLname']  = !empty($userInfo->lastName->localized->en_US)?$userInfo->lastName->localized->en_US:'';
        $inUserData['UserEmail'] = !empty($userEmail->elements[0]->{'handle~'}->emailAddress)?$userEmail->elements[0]->{'handle~'}->emailAddress:'';
        $inUserData['UserProfile']    = !empty($userInfo->profilePicture->{'displayImage~'}->elements[0]->identifiers[0]->identifier)?$userInfo->profilePicture->{'displayImage~'}->elements[0]->identifiers[0]->identifier:'';

        $userData = $inUserData;

        return $userData;
        
    }

    function getCallback($client_id,$client_secret,$redirect_uri,$code){
            $url = "https://www.linkedin.com/oauth/v2/accessToken"; 
            $params = [
                'client_id' => $client_id,
                'client_secret' => $client_secret,
                'redirect_uri' => $redirect_uri,
                'code' => $code,
                'grant_type' => 'authorization_code',
            ];
            $accessToken = get_access_token($url,http_build_query($params));
            $accessToken = json_decode($accessToken)->access_token;
            $userData = fetch_user_data($accessToken);   
            return $userData;
        }

    function dataBase($result,$conn){  
    $error="";
    $UserID=$result['UserID'];  
    $UserName=$result['UserFname']." ".$result['UserLname']; 
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
                $UserData['UserProfile'] = $userdata['UserProfile'];
                $UserData['UserRole'] = $userdata['UserRole'];
                $_SESSION['userData'] = $UserData;
        }
    else{
        $sql = "INSERT INTO UsersInfo (UserProvider,UserID, UserName, UserEmail, UserProfile, UserRole, created)
        VALUES ('".$result['UserProvider']."', '".$result['UserID']."',
            '$UserName','".$result['UserEmail']."','".$result['UserProfile']."','0', NOW())";
                if (mysqli_query($conn, $sql)) {
                    $UserData = array();
                    $UserData['UserID'] = $result['UserID'];
                    $UserData['UserName'] = $UserName;
                    $UserData['UserEmail'] = $result['UserEmail'];
                    $UserData['UserProfile'] = $result['UserProfile'];
                    $UserData['UserRole'] = '0';
                    $_SESSION['userData'] = $UserData;
                } else {
                    $error = "true";
                }
        }
    return $error;
    }

?>