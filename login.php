<?php
    session_start();
    include 'includes/DB.php';
    include 'includes/Query.php';

    $Qobject = new Query;

    if(isset($_SESSION['type']))
    {
        header("location:chat-list.php");
    }

    $message = '';
   
    if(isset($_POST['login'])){

        
        $user_email = $_POST['user_email'];
        $query = "
            SELECT * FROM users 
            WHERE email = '$user_email'
        ";

        $result = $Qobject->select($query);
        $count = $Qobject->table_row_count($query);
        
        if($count > 0)
        {
            
            foreach($result as $row)
            {
                if($row['user_status'] == '1' )
                {
                    if(password_verify($_POST["user_password"], $row["password"]))
                    {
                        
                        $_SESSION['type'] = $row['user_type'];
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['username'] = $row['username'];
                        header("location:chat-list.php");
                                             
                    }
                    else
                    {
                        $message = "<label>Wrong Password</label>";
                    }
                }
                else
                {
                    $message = "<label>Your account is disabled, Contact Master</label>";
                }
            }
        }
        else
        {
            $message = "<label>Wrong Email Address</labe>";
        } 
    } 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Therapist</title>
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="full">
    <header class="header">
        <nav class="">
            <h1 class="logo-btn">My Therapist</h1>
            <i class="ri-close-line"></i>
            <ul class="link-group">
                <li class="link-item">
                    <a href="chat-list.php" class="link"><i class="ri-message-3-fill"></i> Message Therapist list</a>
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
                <li class="btn-item">
                    <a href="./login.php" class="btn"><i class="ri-login-circle-line"></i> Login</a>
                </li>
                <li class="btn-item">
                    <a href="./register.php" class="btn"><i class="ri-user-add-fill"></i> Sign Up</a>
                </li>
            </ul>
            <i class="ri-menu-line"></i>
        </nav>
        <div class="overlay"></div>
    </header>

    <main>
        <section class="login container">
            <h2>Welcome Back</h2>
            <form action="" method="post" class="login-form">
                <?php echo $message; ?>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="user_email" id="user_email" placeholder="Enter Email Address">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="user_password" id="user_password" placeholder="Enter Password">
                </div>
                <div class="input-group">
                    <input type="submit" name="login" class="btn btn-grey" value="Login">
                    <span>Forgotten Password? Reset Password</span>
                </div>
            </form>
            <p>Not yet registered? <a href="./register.php">Join us today</a></p>
        </section>
    </main>


<?php include('./includes/_footer.php') ?>