<?php
session_start();
//google api
require_once 'vendor/autoload.php';
$login_link = '';
$clientId = '842080735167-tmmt4ngsvqui0ir697ptn7lu98sqs8md.apps.googleusercontent.com';
$clientSecret = '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';
$redirecturl = 'https://spacesteps.herokuapp.com/googleapi/google-api.php';
 
// creating client request to google

$client = new Google_Client();
$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirecturl);
$client->addScope('profile');
$client->addScope('email');


if(isset($_GET['code'])){
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);
    //getting user details

    $gauth = new Google_Service_Oauth2($client);
    $google_info = $gauth->userinfo->get();
    $_SESSION['gemail'] = $google_info->email;
    $_SESSION['uname'] = $google_info->name;

    header('location:../member.php');
    
}
else{
    $login_link= $client->createAuthUrl();
}

?>