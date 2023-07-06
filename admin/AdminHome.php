
<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <style>
    /* Global styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Navigation bar styles */
    .navbar {
      background-color: #333;
      overflow: hidden;
    }

    .navbar a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
  </style>
</head>
<body>
  <!-- Navigation bar -->
  <div class="navbar">
  <a href="users/index.html">Home</a>
    <a href="feedback_display.php">Read Feedback</a>
    <a href="users/read.php">Read Room Reservations</a>
    <a href="adminLogin.php">Log out</a>
  </div>
  
  <!-- Main content -->
  <div class="content">
    
    <h1>Welcome, Admin!</h1>
  </div>
</body>
</html>