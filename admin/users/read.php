<!DOCTYPE html>
<html>

<head>
  <title>Hotel Reservations</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
      color: #444;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
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

  // Handle reservation deletion
  if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM reservations WHERE id=$delete_id";
    if (mysqli_query($conn, $sql)) {
      echo "Reservation deleted successfully";
      echo '<br>';
      echo '<br>';
      echo '<a href="read.php"><button>Back</button></a>';
      echo '<br>';
      echo '<br>';
    } else {
      echo "Error deleting reservation: " . mysqli_error($conn);
      echo '<br>';
      echo '<br>';
    }
  }

  // Retrieve the reservation data from the database
  $sql = "SELECT * FROM reservations";
  $result = mysqli_query($conn, $sql);

  // Display the reservation data in a table
  echo "<table>";
  echo "<tr><th>ID</th><th>Guest Name</th><th>Check-in Date</th><th>Check-out Date</th><th>Room Type</th><th>Number of Guests</th><th>Action</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['guest_name'] . "</td>";
    echo "<td>" . $row['check_in_date'] . "</td>";
    echo "<td>" . $row['check_out_date'] . "</td>";
    echo "<td>" . $row['room_type'] . "</td>";
    echo "<td>" . $row['num_guests'] . "</td>";
    echo "<td><a href='update.html?id=" . $row['id'] . "'>Edit</a> | <a href='read.php?delete_id=" . $row['id'] . "'>Delete</a></td>";
    echo "</tr>";
  }
  echo "</table>";
  echo '<br>';
  echo '<br>';
  echo '<a href="../AdminHome.php"><button>Back</button></a>';
  // Close the database connection
  mysqli_close($conn);
  ?>
</body>

</html>