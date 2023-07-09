<!DOCTYPE html>

<?php
$error_masssage = $_POST['error_massage']; 
?>

<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="login-div">
            <div class="logo">
                <img src="HTMLTEXT.HTML/pic/Free-Emblem" alt="">
            </div>
            <div class="title">RCCS</div>
            <div class="title">Retro carbon credit service</div>

            <form class="form" action="logincheck.php" method="post">
                <div class="username">
                    <input type="text" placeholder="Username or Email" name="username">
                </div>
    
                <div class="password">
                    <input type="password" placeholder="Password" name="password">
                </div>
            
                <?php
                    echo 
                    '
                    <div class="title" style="color:red">' .$error_masssage. '  </div>
                    ';
                ?>
                <div class="option">
                    <div class="remember-me">
                        <input id="remember-me" type="checkbox">
                        <label for="remeber-me">Remember me?</label>
                    </div>
                    <div class="forgot password">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
                
                <input type="submit" value="Login">
                <div class="sign-up">
                    <a href="signup.php">New to BCCS? SIng up here!</a>
                </div>
            </form>    
            

        </div>

    </body>



</html>