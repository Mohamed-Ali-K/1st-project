<?php
include_once 'header.php';
?>
<section class="main-container">
    <div class="main-warpper">
        <h2>signup</h2>
        <form class="signup-form" action ="includes/signup.inc.php" method="POST">
            <input type="text" name="user_frist" placeholder="Frist Name">
            <input type="text" name="user_last" placeholder="Last Name">
            <input type="text" name="user_email" placeholder="E-mail">
            <input type="text" name="user_uid" placeholder="Username">
            <input type="password" name="user_password" placeholder="Password">
            <button type="submit" name="submit">Sing up</button>
        </form>
    </div>


</section>
<?php
include_once 'footer.php';
?>
    