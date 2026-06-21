<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "INSERT INTO users (first_name, last_name, email)
            VALUES ('$fname', '$lname', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Account created successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
