// Handle the update operation
<?php
    include_once'config.php';
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated values
    $id=$_POST["v_Id"];
    $name1=$_POST["f_name"];
    $name2=$_POST["l_name"];
    $number=$_POST["m_number"];
    $desc=$_POST["reason"];

    // Sanitize and validate the input data (optional)
    // ...

    // Prepare the UPDATE query
    $sql = "UPDATE detail SET last_name='$name2', first_name='$name1',Mobile='$number' , Reason='$desc' WHERE  VoterId='$id'";

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