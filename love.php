<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website</title>
</head>
<body>
    <h1>Welcome to My Simple Website</h1>

    <div id="userList">
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = ""; // Assuming no password set for the root user
        $database = "your_database_name"; // Replace with your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch user data
        $sql = "SELECT username, email FROM users";
        $result = $conn->query($sql);

        // Display user data
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<p><strong>" . $row["username"] . "</strong> - " . $row["email"] . "</p>";
            }
        } else {
            echo "No users found";
        }

        // Close connection
        $conn->close();
        ?>
    </div>
</body>
</html>
