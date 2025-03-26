<?php
include_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username already exists
    $check_query = "SELECT id FROM users WHERE username = ?";
    $check_stmt = $conn->prepare($check_query);
    $check_stmt->bind_param("s", $username);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $insert_query = "INSERT INTO users (username, password) VALUES (?, ?)";
        $insert_stmt = $conn->prepare($insert_query);
        $insert_stmt->bind_param("ss", $username, $hashed_password);

        if ($insert_stmt->execute()) {
            echo "Registration successful. You can now <a href='login.php'>login</a>.";
        } else {
            echo "Registration failed. Please try again later.";
        }
    }

    // Close statements
    $check_stmt->close();
    $insert_stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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
                <li><a href="logout.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <h2>Register</h2>
    <form method="post" action="register.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <center><input type="submit" name="register" value="Register"></center>
    </form>
    <br>
    <?php
    // Include footer
    include_once "footer.php";
    ?>
</body>

</html>