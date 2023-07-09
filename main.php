<!DOCTYPE html>

<?php
$username = $_POST['username'];
$password = $_POST['password'];
?>

<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="login">
            <a href="login.php">Login</a>
        </div>
        <div class="sign-up">
            <a href="signup.php">Sign-up</a>
        </div>
        <?php
            echo $username          
        ?>
    </body>



</html>