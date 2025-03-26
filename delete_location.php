<?php
session_start();

// Check if the user is logged in and has the required type
if (!isset($_SESSION['username']) || $_SESSION['type'] !== 'auth') {
    // Redirect or handle unauthorized access   
    header("Location: index.php");
    exit();
}

// Assuming you have a database connection established
include_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_location'])) {
    $locationId = $_POST['location_id'];

    // Use prepared statement to avoid SQL injection
    $sql = "DELETE FROM pollution_reports WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error in preparing the statement: " . $conn->error);
    }

    $stmt->bind_param("i", $locationId);

    // Check if the query is successful
    if ($stmt->execute()) {
        echo "Location deleted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
