<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <style>

form {
      margin: 20px auto;
      width: 300px;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
    }

    label, input {
      display: block;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }

    .error {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the username and password
    $errors = array();
    if (empty($username)) {
      $errors[] = "Username is required";
    }
    if (empty($password)) {
      $errors[] = "Password is required";
    }

    // Check if there are any errors
    if (empty($errors)) {
      // Check if the username and password are correct
      if ($username == "admin" && $password == "password") {
        // Redirect to the admin dashboard
        header("Location: admin_dashboard.php");
        exit();
      } else {
        $errors[] = "Invalid username or password";
      }
    }
  }
  ?>
  <form method="post" action="AdminHome.php"> 
    <h2>Admin Login</h2>
    <?php if (!empty($errors)) { ?>
      <div class="error"><?php echo implode("<br>", $errors); ?></div>
    <?php } ?>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <input type="submit" value="Login">
  </form>
</body>
</html>