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
    <style>
        /* styles.css */

        /* Resetting default margin and padding */
        body,
        ul {
            margin: 10px;
            padding: 10px;
        }

        /* Basic styles for the navigation bar */
        header {
            background-color: #333;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 10px;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #ffc107;
            background-color: blue;
            /* Change color on hover */
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
