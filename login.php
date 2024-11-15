<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Remove extra space in query string
    $sql = "SELECT id, username, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];  // Corrected 'name' to 'username'

            // Use header to redirect, and exit to stop further script execution
            header("Location: Products.php");
            exit;
        } else {
            echo "You have entered the wrong password.";
        }
    } else {
        echo "No account registered with this email. Please sign up and then log in.";
    }

    $conn->close();
}
?>
