<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pollution";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve pollution reports from the database
$sql = "SELECT * FROM pollution_reports";
$result = $conn->query($sql);

$reports = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Add each pollution report to the array
        $reports[] = $row;
    }
}

// Return the array as JSON
echo json_encode($reports);

$conn->close();
?>
