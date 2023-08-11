<?php

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_planner";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if (isset($_POST["name"], $_POST["email"], $_POST["phone_no"], $_POST["type"], $_POST["location"], $_POST["date"])) {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone_no"];
    $event_type = $_POST["type"];
    $event_location = $_POST["location"];
    $event_date = $_POST["date"];

    // Prepare and execute the SQL query to insert data into the database
    $stmt = $conn->prepare("INSERT INTO book (name, email, phone_no, type, location, date) VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", $name, $email, $phone, $event_type, $event_location, $event_date);

    if ($stmt->execute()) {
        echo "<script>
            alert('Booking successfully submitted!');
            window.location = 'packages.php';
          </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} 

$conn->close();
?>

