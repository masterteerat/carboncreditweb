<!DOCTYPE html>

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

<?php
$username = $_POST['username'];
$email = $_POST['email'];
$cardid = $_POST['cardid'];
$occupation = $_POST['occupation'];
$password = $_POST['password'];
$error_masssage = $_POST['error_massage']; 
?>


<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet" >

    </head>
    <script>  
    function verifyPassword() {  
    var pw = document.getElementById("password").value;  
    //check empty password field  
    if(pw == "") {  
        document.getElementById("message").innerHTML = "**Fill the password please!";  
        return false;  
    }  
    
    //minimum password length validation  
    if(pw.length < 8) {  
        document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
        return false;  
    }  
    
    //maximum length of password validation  
    if(pw.length > 15) {  
        document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
        return false;  
    } 

    return true;

    }  
    </script>  

    <body>
        <div class="sign-up">
            <div class="logo">
                <img src="HTMLTEXT.HTML/pic/Free-Emblem" alt="">
            </div>
            <div class="title">RCCS</div>
            <div class="title">Retro carbon credit service</div>
            <?php
                echo 
                '
                <div class="title" style="color:red">' .$error_masssage. '</div>
                ';
                
            ?>
            <form class="form" action="register.php" method="post" onsubmit ="return verifyPassword()">
            <?php
                echo  
                '<div class="username">
                    <input type="text" placeholder="Username" name="username" value="' .$username. '">
                </div>
            
                <div class="Email">
                    <input type="text" placeholder="Email" name="email" value="' .$email. '">
                </div>
                <div class="cardid">
                    <input type="text" placeholder="id" name="cardid" value="' .$cardid. '">
                </div>

                <div class="occupation">
                    <input type="text" placeholder="Occupation or buisness" name="occupation" value="' .$occupation. '">
                </div>  
                <div class="password">
                    <input type="password" placeholder="Password" name="password" id="password" value="' .$password. '">
                </div>
                
                <span id = "message" style="color:red" value=""> </span> <br><br>

                <input type="submit" value="Submit">'
            ?>
            </form>

 
        </div>

    </body>


</html>