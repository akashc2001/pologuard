<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: register.php"); // Redirect to registration/login page
    exit();
}

// User is logged in; allow pollution reporting

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming your report.php handles pollution reporting
    include_once "report.php";
}
echo $_SESSION['type'];
if ($_SESSION['type'] !== 'auth') {
    header("Location: ../index.php");
    exit();
}
include_once "header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoSentinel - Pollution Reporting Platform</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Include Leaflet CSS and JS files -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>

<body>
    <div class="container">
        <h2>EcoSentinel - Pollution Reporting Platform</h2>

       <!-- Form for reporting pollution -->
<form action="index.php" method="post" id="reportForm">
    <label for="pollutionType">Type of Pollution:</label>
    <input type="text" name="pollutionType" required pattern="^[a-zA-Z0-9\s]+$">
    <!-- This pattern allows letters, numbers, and spaces -->

    <br>

    <label for="description">Description:</label>
    <textarea name="description" required></textarea>

    <br>

    <!-- Hidden input fields for latitude and longitude -->
    <input type="hidden" name="latitude" id="latitude" value="">
    <input type="hidden" name="longitude" id="longitude" value="">

    <!-- Button to report pollution and get user's location -->
    <button type="submit">Report Pollution</button>
</form>


        <hr>

        <h3>Reported Pollution Locations</h3>
        <!-- Container for the map -->
        <div id="map" style="height: 400px;"></div>

        <!-- Include JavaScript file for handling map functionality -->
        <script src="map.js"></script>
    </div>

    <!-- JavaScript for getting user location -->
    <script>
        
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            // Update hidden input fields with latitude and longitude
            document.getElementById("latitude").value = position.coords.latitude;
            document.getElementById("longitude").value = position.coords.longitude;

            // Submit the form
            document.getElementById("reportForm").submit();
        }
    </script>
    <?php
    // Include footer
    include_once "footer.php";
    ?>
</body>

</html>
