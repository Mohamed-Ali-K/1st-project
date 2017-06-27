<?php
include_once 'header.php';
include 'includes/dbh.inc.php';




        if (isset($_GET['idt'])) {
                        $idt = $_GET['idt'];
                        $sql    = "SELECT * FROM task WHERE idt ='$idt'";
                    $result = $conn->query($sql) or die('errore getting table');
                    $row = $result->fetch_assoc();
                    $description= $row['description'];
                    
                    ?> 
                    <section class="main-container">
                        <div class="main-warpper">

                            <h2>please put the variable you want to update</h2>
                        
                        <form class="signup-form" action="edit.php" method="post">
                        <input type="hidden" name="idt" value="<?php echo $idt ?>">
                            <input type="text" name="Name" value="<?php echo $row['name'] ?>">
                            <textarea rows="7" cols="50" name="description" placeholder="<?php echo $description ?>"></textarea>
                            <input type="text" name="finishing_date" value="<?php echo $row['finishing_date'] ?>">
                            <button type="submit">Update</button>

                        </form>
                        <form class="signup-form" action="affiche.php" method="post">
                        <button type="submit">Cancel</button>
                        </form>  
                    </div>


                    </section>
                    <?php
        }
        if (isset($_POST['submit'])) {
                    $idt = $_POST['idt'];
                    echo "<p>" . $idt ."</p>" ;
                    echo $idt . "<br>";
                    $name = $_POST['Name'];
                    echo $name . "<br>" ;
                    $description = $_POST['description'];
                    echo $description . "<br>" ;
                    $finishing_date = $_POST['finishing_date'];
                    echo $finishing_date ;
                
                    $sql = "UPDATE task SET name='$name', description='$description', finishing_date='$finishing_date' WHERE idt='$idt'
                    ";
                    if ($conn->query($sql) === TRUE) {
                    echo "Record upadated successfully";
                } else {
                    echo "Error upadated record: " . $conn->error;
                }



                    var_dump($sql);

                # $row = $result->fetch_assoc();
                header('location: affiche.php') ;
        }

?>
<?php
include_once 'footer.php';
?>