<?php
include_once 'header.php';
include 'includes/dbh.inc.php';
 $sql = "SELECT 	user_uid, user_id FROM `users`";
               $result = $conn->query($sql) or die('errore getting table');
?>
<section class="main-container">
        <div class="main-warpper">
            <h2>Home</h2>

                          <h2>here to creat a new entries</h2>
                <form class="signup-form" action="edit.php" method="post">
                     <label for="Name">Task Name:</label>
                    <input type="text" name="Name" placeholder="Name">
                    <label for="description">Description:</label>
                    <textarea rows="5" cols="54" name="description" placeholder="description"></textarea>
                    <label for="finishing_date">Finishing date:</label>
                    <input type="text" name="finishing_date" placeholder="YYYY-MM-DD">
                    <select name="user_id">
               <?php
               while ($row = mysqli_fetch_array($result)) {
               echo     '<option value="'. $row['user_id'].'">'. $row['user_uid'].'</option>';
               }
                ?>
             </select>
                    <button type="submit" name="submit0">Creat a New Task</button>
                </form>
                <form class="signup-form" action="index.php" method="post">
                        <button name="submit" type="submit">Cancel</button>
                        </form> 
         </div>


</section>  
<script>
        window.jQuery || document.write('<script src="js/jquery-2.1.4.js"><\/script>');
    </script>
 <script src="js/script.js"></script>              

    <?php
include_once 'footer.php';
?>