// Handle the update operation
<?php
    include_once'config.php';
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated values
    $id = $_POST['cid'];
    $title = $_POST['tit'];
    $fullName = $_POST['fname'];
    $add = $_POST['addr'];
    $gen = $_POST['gend'];
    $ag = $_POST['cage'];


    // Sanitize and validate the input data (optional)
    // ...

    // Prepare the UPDATE query
    $sql = "UPDATE candidate SET C_ID='$id',title='$title', full_name='$fullName',address='$add',gender='$gen',age='$ag' WHERE C_ID='$id'";

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