<html>

<head>
    <title>HR Login</title>
    <link rel="stylesheet" href="hrstyls.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            HR Login
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        <div class="nav-links">
            <a href="index.php" target="_blank">Home</a>
          <a href="opportunities.php" target="_blank">Opportuniites</a>
          <a href="contactus.php" target="_blank">Contact Us</a>
          
        </div>
      </div>
      <div>
        <div class="form-popup" id="myForm">
            <form  class="form-container">
              <h1>Login</h1>
              <label for="username" ><b>UserName</b></label>
              <input type="text" placeholder="Enter username" name="username" required>
          
              <label for="password" ><b>Password</b></label>
              <input type="password" placeholder="Password" name="pwd" required>
          
              
              <button type="submit" class="btn">Register</button>
            </form>
          </div>
      </div>
</body>

</html>