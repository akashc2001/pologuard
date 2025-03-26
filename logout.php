<?php
// Initialize the session
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to login or any other page after logout
header("Location: login.php");
exit();
?>
