<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taxheal";
$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn) {
    echo "Logged Out...You will be Redirected in few seconds";
    header('Refresh: 3; URL=hrlogin.php');
 } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
 }


$conn->close();
?>
