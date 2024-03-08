<?php

// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "registeration"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Check if passwords match
    if ($password != $confirmPassword) {
        echo "<script>alert('Password does not match. Please try again.')</script>";
    } else {
        // Prepare SQL statement to insert data
        $sql = "INSERT INTO `register`(`email`, `password`) VALUES ('$email','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful! Please login Here.')</script>";
            // Redirect to home page or login page
            header("Location: signup_form.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
//login form//
$conn->close();

?>
