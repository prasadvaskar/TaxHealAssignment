  
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taxheal";
$conn = new mysqli($servername, $username, $password, $dbname);



$name =  $_POST['name'];
$email = $_POST['email'];
$education = $_POST['education'];
$college = $_POST['clg'];
$date = $_POST['dob'];
$mobile = $_POST['mobilenumber'];
$city = $_POST['city'];

$sql = "INSERT INTO userdata (name,email,education,college,dateofbirth,Mobile,City)
VALUES('$name','$email','$education','$college','$date','$mobile','$city')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ! You will be redirected automatically in few seconds";
    header('Refresh: 5; URL=opportunities.php');
 } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
 }


$conn->close();
?>
