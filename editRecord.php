// Handle the update operation
<?php
    include_once'config.php';
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated values
    $id=$_POST["wId"];
    $name = $_POST["wName"];
    $place = $_POST["Place"];
    $nov = $_POST["nov"];

    // Sanitize and validate the input data (optional)
    // ...

    // Prepare the UPDATE query
    $sql = "UPDATE ArtistYr SET W_Name='$name', W_Place='$place',NumofV='$nov' WHERE W_Id='$id'";

    // Execute the query
    if ($conn->query($sql) === true) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>