<?php
// Include the database connection file
include_once "conn.php";

// Retrieve the location ID from the URL parameter
$locationId = $_GET['id'];

// Use prepared statement to avoid SQL injection
$sql = "DELETE FROM pollution_reports WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $locationId);

// Check if the query is successful
if ($stmt->execute()) {
    // Redirect to index.php after successful deletion
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement
$stmt->close();

// Close the database connection
$conn->close();
?>
