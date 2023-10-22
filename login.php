<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Establish a database connection (replace with your database details)

    $db = new mysqli('localhost', 'root', 'abc123!@#', 'crud');

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Query to check if the user exists in the database
    $query = "SELECT id, username, password FROM users WHERE username = ?";

    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        // For educational purposes, we're comparing plain text passwords (NOT RECOMMENDED)
        if ($password == $hashed_password) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("location: welcome.php"); // Redirect to a welcome page
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }

    $stmt->close();
    $db->close();
}
