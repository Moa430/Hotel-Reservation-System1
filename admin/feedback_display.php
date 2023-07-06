
<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve contact details from database
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Feedback List</title>";
    echo "<style>";
    echo "body {";
    echo "    font-family: Arial, sans-serif;";
    echo "    margin: 0;";
    echo "    padding: 0;";
    echo "}";
    echo "h2 {";
    echo "    text-align: center;";
    echo "}";
    echo "table {";
    echo "    width: 100%;";
    echo "    border-collapse: collapse;";
    echo "}";
    echo "th, td {";
    echo "    padding: 8px;";
    echo "    text-align: left;";
    echo "    border-bottom: 1px solid #ddd;";
    echo "}";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<h2>Users Feedback</h2>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Phone</th>";
    echo "<th>Message</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</body>";
    echo "</html>";
} else {
    echo "No contact details found.";
}

// Close database connection
$conn->close();
?>
