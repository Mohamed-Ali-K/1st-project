<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <header>
    <nav>
        <div class="main-warpper">
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
            <div class="nav-login">
                <?php
                    if (isset($_SESSION['user_id'])) {
                     echo'<form action="includes/logout.php" method="POST">
                     <button type="submit" name="submit">Logout</button>
                      </form>';
                      $user_id=$_SESSION['user_id'] ;
                    } else {
                        echo '
                       
                        <form action="includes/login.inc.php" method="POST">
                            <input type="text" name="user_uid" placeholder="Username/e-mail">
                            <input type="password" name="user_password" placeholder="Password">
                            <button type="submit" name="submit">Login</button>
                        </form>
                        <a href="signup.php">Sign up</a>';
                    }
                    
                ?>
                
            </div>   

        </div>


    </nav>    

    </header>