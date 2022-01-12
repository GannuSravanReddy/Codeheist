<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.css"/>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <title><?php  echo ''.$_SESSION['user_first_name'].$_SESSION['user_last_name']; ?></title>
    <style>
        body{
            background-color:black;
            color:#fff;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Space steps</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./logout.php">Logout</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo ''.$_SESSION['user_name'];?></a>

        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo ''.$_SESSION['uname'];?></a>
          
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



            <!-- facebook output -->
           <div class="container"> <?php
                if(isset($_SESSION['user_image'])){
                    echo '<h1>Welcome</h1>';
                    echo '<img src="'.$_SESSION['user_image'].'" />';
                    echo '<h1><b>Name :</b>'.$_SESSION['user_name'].'</h1>';
                    echo '<h3><b>Email :</b>'.$_SESSION['user_email_address'].'</h3>';
                    
                 
                }
            ?></div>
            <!-- google output -->
            <?php
                if(isset($_SESSION['uname'])){
                
                    echo '<h1>Name :'.$_SESSION['uname'].'</h1>';
                    echo '<h1>Email :'.$_SESSION['gemail'].'</h1>';
                }
            ?>
            <h3><a href="./logout.php">logout</a></h3>    
</body>
</html>