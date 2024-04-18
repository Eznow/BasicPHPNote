<?php
include 'db.php';

// Check if id is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete note from the database
    $stmt = $conn->prepare("DELETE FROM notes WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Redirect to index page
    header("Location: index.php");
}
?>
