<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taxheal";
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM hrlogin WHERE username='" . $_POST["username"] . "' and password = '". $_POST["pwd"]."'";
$result = $conn->query($sql);
$count  = mysqli_num_rows($result);


if($count==0) {
    echo "Invalid Username or Password!";
} else {
    echo "You are successfully authenticated!";
    header("Location: admin.php"); 
  
    exit; 
}


$conn->close()
?>


