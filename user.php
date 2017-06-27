
 
 <?php

include 'includes/dbh.inc.php';
include_once 'header.php';


$sql = "SELECT * FROM users";
$result = $conn->query($sql) or die('errore getting table');
echo "<table>";
echo "<tr><th>user_id</th><th>user_frist</th><th>user_last</th><th>user_uid</th><th>user_email</th><th>Delete/Edit</th></tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>";
    echo $row['user_id'];
    echo "</td><td>";
    echo $row['user_frist'];
    echo "</td><td>";
    echo $row['user_last'];
    echo "</td><td>";
    echo $row['user_uid'];
    echo "</td><td>";
    echo $row['user_email'];
    echo "</td><td>";
    $idt=$row['user_id'];
    echo ' <a href="includes/del.php?idt=' . $user_id . '">Delete</a> /
           <a href="edit.php?idt=' . $user_id . '">Edit</a>' ;
    echo "</td></tr>";
}
?>
 <section class="main-container">
        <div class="main-warpper">
<h2>All list of user you can edit or delete theme</h2>
    <form class="signup-form" action="index.php" method="post">
    <button type="submit">Back</button>
     </form>
   </div>
</section>    
       
