<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pollution";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input from the pollution reporting form
$pollutionType = $_POST['pollutionType'];
$description = $_POST['description'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Use prepared statement to avoid SQL injection
$sql = "INSERT INTO pollution_reports (pollution_type, description, latitude, longitude) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters and execute the statement
$stmt->bind_param("ssdd", $pollutionType, $description, $latitude, $longitude);

// Check if the query is successful
if ($stmt->execute()) {
    echo "Pollution report submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
