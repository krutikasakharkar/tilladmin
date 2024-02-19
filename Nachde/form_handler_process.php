<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        /* CSS styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<nav>
        <ul>
            <li><a href="admin_panel.php">Admin Panel</a></li> 
        </ul>
    </nav>

<?php
    // Include database connection
    include "connection.php";

    // Fetch feedback from the database
    $sql = "SELECT * FROM query";
    $result = mysqli_query($conn, $sql);

    // Check if there are any feedback entries
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Query</th><th>Message</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["query"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No feedback available";
    }

    // Close database connection
    mysqli_close($conn);
?>

</body>
</html>
