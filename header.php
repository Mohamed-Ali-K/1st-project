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
   <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script>
        window.jQuery || document.write('<script src="js/jquery-2.1.4.js"><\/script>');
    </script>
 <script src="js/script.js"></script>
    </header>