

<?php
// Start session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_planner";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the provided password (use a secure hashing algorithm like bcrypt)
    $hashedPassword = hash("sha256", $password);

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT id FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $hashedPassword);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login successful
        $_SESSION["username"] = $username;
        header("Location: index.php");
    } else {
        // Login failed
        $_SESSION["login_error"] = "Invalid username or password";
        header("Location: login.php");
    }

    $stmt->close();
}

$conn->close();
?>
