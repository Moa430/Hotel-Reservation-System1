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

// Insert the reservation data into the database
$sql = "INSERT INTO reservations (guest_name, check_in_date, check_out_date, room_type, num_guests)
        VALUES ('$guest_name', '$check_in_date', '$check_out_date', '$room_type', $num_guests)";
if (mysqli_query($conn, $sql)) {
  echo "Reservation created successfully";
  echo '<br>';
  echo '<br>';
  echo '<a href="index.html"><button>Back</button></a>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>