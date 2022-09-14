<?php
    include 'includes/DB.php';
    include 'includes/Query.php';
    $DBobject = new Query;
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $DBobject->title() ?></title>
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body class="full">
   <header class="header">
        <nav class="">
            <h1 class="logo-btn">My Therapist</h1>
            <i class="ri-close-line"></i>
            <ul class="link-group">
                <li class="link-item">
                    <a href="chat-list.php" class="link"><i class="ri-message-3-fill"></i> Message a Therapist</a>
                </li>
                <li class="link-item">
                    <a href="index.php" class="link"><i class="ri-chat-smile-3-line"></i> Meet a Therapist</a>
                </li>
                <li class="link-item">
                    <a href="" class="link"><i class="ri-briefcase-line"></i> Therapist Jobs</a>
                </li>
                <li class="link-item">
                    <a href="" class="link"><i class="ri-profile-fill"></i> Profile</a>
                </li>
                <li class="link-item">
                    <a href="settings.php" class="link"><i class="ri-settings-4-line"></i> Settings</a>
                </li>
            </ul>
            <ul class="btn-group">
                <?php 
                    if(isset($_SESSION['type'])){
                        echo '<li class="btn-item">
                                <a href="./logout.php" class="btn"><i class="ri-logout-circle-line"></i> Logout</a>
                            </li>';
                    }else{
                         echo '<li class="btn-item">
                                <a href="./login.php" class="btn"><i class="ri-login-circle-line"></i> Login</a>
                            </li> 
                            <li class="btn-item">
                                <a href="./register.php" class="btn"><i class="ri-user-add-fill"></i> Sign Up</a>
                            </li>';
                    }
                ?>
               
                
            </ul>
            <i class="ri-menu-line"></i>
        </nav>
        <div class="overlay"></div>
    </header>
