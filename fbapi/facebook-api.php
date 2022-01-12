<?php
//config.php
require_once 'vendor/autoload.php';

if(!session_id()){
    session_start();
}
// facebook api

$facebook = new \Facebook\Facebook([
    'app_id' => '925301561447913',
    'app_secret' => '322fd32a701c55dc7a096aabf7c786b8',
    'default_graph_version' => 'v2.10'

]);

$facebook_output = '';

$facebook_helper = $facebook->getRedirectLoginHelper();
if(isset($_GET['code'])){
    if(isset($_SESSION['access_token'])){
        $access_token = $_SESSION['access_token'];

    }else{
        $access_token = $facebook_helper->getAccessToken();
        $_SESSION['access_token'] = $access_token;
        $facebook->setDefaultAccessToken($_SESSION['access_token']);
    }

    $graph_response = $facebook->get("/me?feilds=name,email",$access_token);
    $facebook_user_info = $graph_response->getGraphUser();

    if(!empty($facebook_user_info['id'])){

        $_SESSION['user_image'] = 'http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';
    }
    if(!empty($facebook_user_info['name'])){

        $_SESSION['user_name'] = $facebook_user_info['name'];
    }
    if(!empty($facebook_user_info['email'])){

        $_SESSION['user_email_address'] = $facebook_user_info['email'];
    }
    header('location:../member.php');
}else{
    $facebook_permissions = ['email'];

    $facebook_login_url = $facebook_helper->getLoginUrl('https://spacesteps.herokuapp.com/',$facebook_permissions);
    $facebook_login_url = '<div align="center"><a href="'.$facebook_login_url.'"><img style="width:100px;" src="../images/facebook-logo.png"/></a></div>';
    
}

?>