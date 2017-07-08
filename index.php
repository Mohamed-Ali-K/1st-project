<?php
include_once 'header.php';
?>
    <section class="main-container">
        <div class="main-warpper">
            <h2>Home</h2>
            <?php
            if (isset($_SESSION['user_id'])) {
               echo "<h2>Welcome <b style=\"color: green\">{$_SESSION['user_frist']}</b> you are logged in ! :D </h2> " . "<br>";
               include 'includes/dbh.inc.php';
               $sql = "SELECT 	user_uid, user_id FROM `users`";
               $result = $conn->query($sql) or die('errore getting table');
                ?>
                <form class="signup-form" action="addtask.php" method="post">
                    <button type="submit" name="submit">Add New Task</button>
                </form>
                
                <form class="signup-form" action="affiche.php" method="post">
                    <button type="submit" name="submit">Show all task</button>
                </form>
                <form class="signup-form" action="user.php" method="post">
                    <button type="submit" name="submit">Show all user</button>
                </form>
                <?php            
            }
             ?>

        </div>


    </section>
    <?php
include_once 'footer.php';
?>