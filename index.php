<?php
include_once 'header.php';
?>
    <section class="main-container">
        <div class="main-warpper">
            <h2>Home</h2>
            <?php
            if (isset($_SESSION['user_id'])) {
               echo "Welcome {$_SESSION['user_frist']} you are logged in ! :D " . "<br>";
               include 'includes/dbh.inc.php';
               $sql = "SELECT 	user_uid, user_id FROM `users`";
               $result = $conn->query($sql) or die('errore getting table');
                ?>

                <h2>here to creat a new entries</h2>
                <form class="signup-form" action="includes/posting.php" method="post">
                    <input type="text" name="Name" placeholder="Name">
                    <textarea rows="5" cols="40" name="description" placeholder="description"></textarea>
                    <input type="text" name="finishing_date" placeholder="YYYY-MM-DD">
                    <select name="user_id">
               <?php
               while ($row = mysqli_fetch_array($result)) {
               echo     '<option value="'. $row['user_id'].'">'. $row['user_uid'].'</option>';
               }
                ?>
             </select>
                    <button type="submit" name="submit">Creat a New Task</button>
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