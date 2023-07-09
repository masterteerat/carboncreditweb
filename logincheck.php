<?php
$servername = "db";
$dbusername = "user";
$dbpassword = "test";
$dbname = "myDb";
$error_massage = NULL;

$username = $_POST['username'];
$password = $_POST['password'];


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "select * from user where username = '$username' and password = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  

if($count > 0){  
  echo
  '<body onload="document.redirectform.submit()">   
          <form method="POST" action="main.php" name="redirectform" style="display:none">
          <input name="username" value=' . $username. '>
          <input name="password" value=' . $password. '>
          </form>
  </body>'; 
} else{  
  
  $error_massage = "Login failed, Invalid username or password.";
  echo
  '<body onload="document.redirectform.submit()">   
          <form method="POST" action="login.php" name="redirectform" style="display:none">
          <input name="username" value=' . $username. '>
          <input name="password" value=' . $password. '>
          <input name="error_massage" value="' .$error_massage. '">
          </form>
  </body>';  
}     


?>