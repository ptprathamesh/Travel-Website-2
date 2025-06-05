<?php
// Database Connection
$server = "localhost";
$username = "root";
$password = "";
$dbname = "travel_db";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get Form Data
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert Data into Database
$sql = "INSERT INTO bookings (name, dob, email, phone) VALUES ('$name', '$dob', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close Database Connection
$conn->close();

header("Location: confirmation.html");
exit();

?>
