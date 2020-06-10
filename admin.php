<html>

<head>
    <title>Admin Panel</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <style>
         #navbar{
            width: 100%;
            height: 10%;
            background-color: red;
         }

         #navbar h1,h3{
             margin-left: 5%;
             font-family: monospace;
         }

         table{
             margin-top: 1%;
             border-collapse: collapse;
             width: 80%;
             margin-left: 5%;
             color: #588c7e;
             font-family: monospace;
             font-size: 25px;
             text-align: left;
         }

         th{
             background-color: #588c7e;
             color: white;
         }
         tr:nth-child(even){ background-color: #f2f2f2};
     </style>
</head>

<body>
    <div id="navbar">
        <h1>Welcome Admin!</h1><br>
        <h3>Below are the Applications Recieved..</h3>
    </div>
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
            echo "<tr><td>". $row["name"] ."</td><td>". $row["email"] ."</td><td>". $row["education"] ."</td><td>". $row["college"] ."</td><td>". $row["dateofbirth"] ."</td><td>". $row["Mobile"] ."<td><td>". $row["City"] ."</td></tr>" ;
        }
        echo "</table>";
    }

    else{
        echo "0 result";
    }

    $conn ->close();
    ?>
    
    </table>
    <a href="logout.php">Logout</a>
</body>

</html> 