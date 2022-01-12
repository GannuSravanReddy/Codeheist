<?php
// index page
include './fbapi/facebook-api.php';

if(isset($_SESSION['user_name'])){
    header('location:member.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./index.css">
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <title>Membership</title>
</head>
<body><br>
    <div id="lgcon" style="border-style:groove;border-radius:5px;border-size:0px;" class="container">
    <center>
        <h1> <b> Login with</b></h1>
        
            <div class="container">
               
                <?php 
                echo ''.$facebook_login_url;
                
                ?>
                <a href="./googleapi/redirect.php"><img src="./images/google-logo.png" alt="Login with Google" style="width:100px;"></a>
 
            </div>
            <br>
        
    </center>
    </div>
</body>
</html>