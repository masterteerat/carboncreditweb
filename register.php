<?php
$servername = "db";
$dbusername = "user";
$dbpassword = "test";
$dbname = "myDb";
$error_massage = NULL;  

$input = TRUE;  

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$username = $_POST['username'];
$email = $_POST['email'];
$cardid = $_POST['cardid'];
$occupation = $_POST['occupation'];
$password = $_POST['password'];



  $sql = "INSERT INTO user (username, cardid, email, occupation, password)
  VALUES ('$username','$cardid','$email', '$occupation', '$password')";

  if ($conn->query($sql) == TRUE) {
      //echo "New record created successfully";
      header("Location: main.php");
      exit(0);
   
    } else {
      #echo "Error: " . $sql . "<br>" . $conn->error;
      $error_massage = "This username already exist.";
      echo
      '<body onload="document.redirectform.submit()">   
          <form method="POST" action="signup.php" name="redirectform" style="display:none">
          <input name="username" value=' . $username. '>
          <input name="cardid" value=' . $cardid. '>
          <input name="email" value=' . $email. '>
          <input name="occupation" value=' . $occupation. '>
          <input name="password" value=' . $password. '>
          <input name="error_massage" value="' .$error_massage. '">
          </form>
      </body>'; 
    }
  
    $conn->close();



?>