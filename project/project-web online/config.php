<?php
// Database credentials
$servername = "10.1.3.40"; // Change this to your MySQL server hostname (or use "localhost")
$username = "65102010688"; // Change this to your MySQL username
$password = "65102010688"; // Change this to your MySQL password
$database = "65102010688"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example SQL query
$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);

// Check if query was successful
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Column1: " . $row["column1"] . " - Column2: " . $row["column2"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
