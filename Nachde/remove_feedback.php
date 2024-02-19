<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
        <ul>
            <li><a href="admin_panel.php">Admin Panel</a></li> 
        </ul>
    </nav>
    <div class="container">
        <h2>Remove Feedback</h2>
        <form action="remove_feedback_process.php" method="POST">
            <label for="query_id">Enter ID to Remove:</label>
            <input type="text" id="query_id" name="query_id" required><br><br>
            <input type="submit" name="submit" value="Remove">
        </form>
    </div>
</body>
</html>