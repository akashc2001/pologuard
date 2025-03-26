<?php
session_start();
include_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // After verifying the username and password in login.php
if (password_verify($password, $row['password'])) {
    $_SESSION['username'] = $username;
    $_SESSION['type'] = $row['type']; // Assuming the user type is stored in the 'type' column
    echo $_SESSION['type'];
    header("Location: index.php");
    exit();
} else {
    echo "Invalid password. Please try again.";
}

    } else {
        echo "User does not exist. Please register.";
    }

}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Include Leaflet CSS and JS files -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <h2>Login</h2>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <center> <input type="submit" name="login" value="Login"></center>
    </form>
    <?php
    // Include footer
    include_once "footer.php";
    ?>
</body>

</html>