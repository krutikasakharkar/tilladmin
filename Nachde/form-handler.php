<?php
// Check if the form is submitted
if(isset($_POST['submit'])){
    // Include your database connection file
    include "connection.php";

    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $query = mysqli_real_escape_string($conn, $_POST['query']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SQL INSERT statement
    $sql = "INSERT INTO query (name, email, query, message) VALUES ('$name', '$email', '$query', '$message')";

    // Execute SQL statement
    if(mysqli_query($conn, $sql)){
        // If data is inserted successfully, you can redirect the user to a thank you page or display a success message
        header("Location: thank_you.php");
        exit(); // Exit to prevent further execution
    } else {
        // If an error occurs, you can redirect the user back to the form page or display an error message
        header("Location: contact.php?error=database_error");
        exit(); // Exit to prevent further execution
    }
} else {
    // If the form is not submitted, redirect the user back to the form page
    header("Location: contact.php");
    exit(); // Exit to prevent further execution
}
?>
