<?php
// Start the session
session_start();

// Check if the user is logged in as an admin
if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
  // Unset all of the session variables
  $_SESSION = array();

  // Destroy the session cookie
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]
    );
  }

  // Destroy the session
  session_destroy();

  // Redirect to the login page
  header("Location: adminLogin.php");
  exit;
} else {
  // If the user is not logged in as an admin, redirect to the login page
  header("Location: adminLogin.php");
  exit;
}
?>
