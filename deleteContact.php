<?php

 include_once'config.php';
// Assuming you have established a database connection
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the ID of the record you want to delete
    $recordId = $_POST['v_Id']; // Assuming you're getting the ID from a form input field

    // Prepare the delete query
    $sql = "DELETE FROM detail WHERE VoterId = ?";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $recordId); // Assuming the ID is an integer, use "i" as the type

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();

?>