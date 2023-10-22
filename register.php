<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate user input as needed

    // Create a database connection (replace with your own database details)
    $mysqli = new mysqli('localhost', 'root', 'abc123!@#', 'crud');

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Check if the username is already taken
    $checkQuery = "SELECT id FROM users WHERE username = ?";
    $stmt = $mysqli->prepare($checkQuery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Username already exists. Please choose another.";
    } else {
        // Insert the new user into the database with a plain text password (NOT RECOMMENDED)
        $insertQuery = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $mysqli->prepare($insertQuery);
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
    $mysqli->close();
}
