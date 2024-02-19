<?php
include "connection.php";

// Assuming you're submitting the form via POST method
if(isset($_POST['submit'])){
    $query_id = $_POST['query_id'];

    // Delete data from database
    $sql = "DELETE FROM query WHERE id='$query_id'";

    if ($conn->query($sql) === TRUE) {
        // Redirect to view all feedback page
        header("Location: form_handler_process.php");
        exit(); // Ensure no more output is sent
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
