<?php
$servername = "db";
$dbusername = "user";
$dbpassword = "test";
$dbname = "myDb";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $username = $_POST['username'];
  $cardid = $_POST['cardid'];
  $email = $_POST['email'];
  $occupation = $_POST['occupation'];
  $password = $_POST['password'];


}

$sql = "INSERT INTO user (username, cardid, email, occupation, password)
VALUES ('$username','$cardid','$email', '$occupation', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>