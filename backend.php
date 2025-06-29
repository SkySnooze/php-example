<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // input form
    $username = $_POST['username'];
    $password = $_POST['password'];

    #should use sql
    $validUsername = "admin";
    $validPassword = "1234";

    #check
    if ($username === $validUsername && $password === $validPassword) {
        echo "Login Success! Welcome, " . htmlspecialchars($username);
    } else {
        echo "Login Failed! Invalid username or password.";
    }
} else {
    echo "Access Denied.";
}
?>
