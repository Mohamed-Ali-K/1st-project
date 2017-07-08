<?php
include_once 'header.php';
include 'includes/dbh.inc.php';
         if (!isset($_POST['submit'])) {
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
                            <label for="Name">Task Name :</label>
                            <input type="text" name="Name" value="<?php echo $row['name'] ?>">
                             <label for="description">Description :</label>
                            <textarea rows="7" cols="54" name="description" placeholder="<?php echo $description ?>"></textarea>
                             <label for="finishing_date">Finishing date :</label>
                            <input type="text" name="finishing_date" value="<?php echo $row['finishing_date'] ?>">
                            <button name="submit" type="submit">Update</button>

                        </form>
                        <form class="signup-form" action="affiche.php" method="post">
                        <button name="Cancel" type="submit">Cancel</button>
                        </form>  
                    </div>


                    </section>
                    <?php
        }}

       
            if (isset($_POST['submit'])) {
                $idt = $_POST['idt'];
                $name = $_POST['Name'];
                $description = $_POST['description'];
                $finishing_date = $_POST['finishing_date'];
            
                $sql = "UPDATE task SET name='$name', description='$description', finishing_date='$finishing_date' WHERE idt='$idt'
                ";
                        if ($conn->query($sql) === TRUE) {
                        echo "Record upadated successfully";
                         } else {
                        echo "Error upadated record: " . $conn->error;
                         }



                #var_dump($sql);

            # $row = $result->fetch_assoc();
            header('location: affiche.php') ;
            exit();
            }


            if (isset($_POST['submit0'])) {
                $Name = $_POST['Name'];
                $description = $_POST['description'];
                $finishing_date = $_POST['finishing_date'];
                $user_id = $_POST['user_id'];
            
            
                $sql = "INSERT INTO task(user_id, name, description, finishing_date)
                VALUES ('$user_id','$Name','$description','$finishing_date')";
                #var_dump($sql);
                $result = $conn->query($sql);
                # $row = $result->fetch_assoc();
                header('location: affiche.php') ;
            }
                else {echo " errey" ;}
     

?>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script>
        window.jQuery || document.write('<script src="js/jquery-2.1.4.js"><\/script>');
    </script>
 <script src="js/edit.js"></script>
<?php
include_once 'footer.php';
?>