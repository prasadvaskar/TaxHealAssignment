<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="adminstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Education</th>
            <th>College</th>
            <th>Date of Birth</th>
            <th>Mobile Number</th>
            <th>City</th>
        </tr>
        
    
    <?php
    
    $conn = mysqli_connect("localhost","root","","taxheal");
    if($conn-> connect_error){
        die("Connection Faile:". $conn -> connect_error);
    }

    $sql = "SELECT name,email,education,college,dateofbirth,Mobile,City FROM userdata";
    $result = $conn->query($sql);


    if($result -> num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<td>". $row["name"] ."<td>". $row["email"] ."<td>". $row["education"]."<td>". $row["college"] ."<td>". $row["dateofbirth"]."<td>". $row["Mobile"] ."<td>". $row["City"];
        }
        echo "</table>";
    }

    $conn ->close();
    ?>
    <button type ="submit">Logout</button>
</body>

</html> 