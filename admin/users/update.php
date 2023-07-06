<?php
// Connect to the MySQL database
$host = "localhost";
$username = "root";
$password = "";
$database = "hotel";
$conn = mysqli_connect($host, $username, $password, $database);

// Check for errors in the database connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the reservation data from the form submission
$guest_name = $_POST['guest_name'];
$check_in_date = $_POST['check_in_date'];
$check_out_date = $_POST['check_out_date'];
$room_type = $_POST['room_type'];
$num_guests = $_POST['num_guests'];

// Update the reservation data in the database
$sql = "UPDATE reservations SET check_in_date='$check_in_date', check_out_date='$check_out_date', room_type='$room_type', num_guests=$num_guests WHERE guest_name='$guest_name'";
if (mysqli_query($conn, $sql)) {
  if (mysqli_affected_rows($conn) > 0) {
    echo "Reservation updated successfully";
  } else {
    echo "Reservation not found";
  }
  echo '<br>';
  echo '<br>';
  echo '<a href="index.html"><button>Back</button></a>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
