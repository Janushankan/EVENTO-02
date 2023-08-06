<?php

use LDAP\Result;

$db = mysqli_connect("localhost", "root", "", "event_planner");

// Check if the connection was successful
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}
$id = $_POST["id"];
$name = $_POST["name"];
$image = $_POST["image"];
$email = $_POST["email"];
$phone = $_POST["phone_no"];

$query = "insert into caterer(caterer_id,caterer_name,image,caterer_email,caterer_phone_no) values('$id','$name','$image','$email','$phone')";
$result = mysqli_query($db, $query);

// Check if the insertion was successful
if ($result) {
    echo "<script>
            alert('Data Added Successfully!');
            window.location = 'caterers.php'; // Redirect to the desired page after successful insertion
          </script>";
} else {
    // If insertion failed
    echo "<script>
            alert('Failed to add data.');
            window.location = 'caterers.php'; // Redirect to the desired page after an error
          </script>";
}

?>

</body>

</html>