<?php
$Fname =$_POST['un'];
$Lname =$_POST['pw'];


$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "ponce";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (un, paw)
VALUES ('".$Fname."', '".$Lname."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>