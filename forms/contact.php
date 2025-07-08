<?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quickstart";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Insert into database
        $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
            echo "OK";
        } else {
            echo "Errora: " . $sql . "<br>" . $conn->error;
        }
    }
?>