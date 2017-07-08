<?php
include_once 'header.php';
?>
<section class="main-container">
    <div class="main-warpper">
        <h2>signup</h2>
        <form class="signup-form" action ="includes/signup.inc.php" method="POST">
        <label for="user_frist">Frist Name</label>
            <input type="text" id="user_frist" name="user_frist" placeholder="Frist Name">
            <label for="user_last">Last Name</label>
            <input  type="text"  id="user_last" name="user_last" placeholder="Last Name">
            <label for="user_email">E-mail</label>
            <input  type="text"  id="user_email" name="user_email" placeholder="E-mail">
            <p id="form-message2"></p>
            <p><img src="LoaderIcon.gif" id="loaderIcon2"> </p>  
            <label for="user_uid">Username</label>
            <input type="text" name="user_uid" id="user_uid"  placeholder="Username">
            <p id="form-message"></p>
            <p><img src="LoaderIcon.gif" id="loaderIcon"> </p>  
            <label for="user_password">Password</label>
            <input  type="password" name="user_password" id="user_password" placeholder="Password">
            <label for="ruser_password"> Repet Password</label>
            <input  type="password" name="ruser_password" id="ruser_password" placeholder="Password">
             
            <button type="submit" name="singup">Sing up</button>
        </form>
    </div>


</section>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script>
        window.jQuery || document.write('<script src="js/jquery-2.1.4.js"><\/script>');
    </script>
 <script src="js/script.js"></script>
<?php
include_once 'footer.php';
?>
    