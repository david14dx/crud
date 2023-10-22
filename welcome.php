<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "!";
} else {
    header("location: login.html"); // Redirect to the login page if the session is not set
}
