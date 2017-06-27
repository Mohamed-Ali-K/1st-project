 <?php

include 'includes/dbh.inc.php';
include_once 'header.php';


$sql = "SELECT task.idt, users.user_uid, task.name, task.description, task.creation_date, task.finishing_date
        FROM task
        INNER JOIN users
        ON task.user_id=users.user_id
        ORDER BY `task`.`creation_date` ASC;";
$result = $conn->query($sql) or die('errore getting table');
echo "<table>";
echo "<tr><th>idt</th><th>Username</th><th>Name</th><th>description</th><th>creation date</th><th>finishing date</th><th>Delete/Edit</th></tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>";
    echo $row['idt'];
    echo "</td><td>";
    echo $row['user_uid'];
    echo "</td><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['description'];
    echo "</td><td>";
    echo $row['creation_date'];
    echo "</td><td>";
    echo $row['finishing_date'];
    echo "</td><td>";
    $idt=$row['idt'];
    echo ' <a href="includes/del.php?idt=' . $idt . '">Delete</a> /
           <a href="edit.php?idt=' . $idt . '">Edit</a>' ;
    echo "</td></tr>";
}
    echo'<form action="index.php" method="post">
    <button type="submit" class="button button1">Create New One</button>
     </form>';

 ?> 
<section class="main-container">
    <div class="main-warpper">
        <h2>show all tasks</h2>
        <form class="signup-form" action="index.php" method="post">
            <button type="submit">Back</button>
        </form>
    </div>
</section>