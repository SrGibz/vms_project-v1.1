<?php
// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

// Display a welcome message
echo "Welcome, " . $_SESSION['username'] . "!";

// Add a logout link
echo "<p><a href='logout.php'>Logout</a></p>";
?>