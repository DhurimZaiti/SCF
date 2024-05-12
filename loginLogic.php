<?php
session_start();
include_once('config.php'); // Assuming config.php contains your database connection code

// Check if the form is submitted
if(isset($_POST['login']))
{
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate if username and password are not empty
    if (empty($username) || empty($password)) {
        $error = "Please fill in all fields";
    }
    else {
        // Prepare SQL statement to retrieve user data based on username
        $sql = "SELECT id, username, password, is_admin FROM users WHERE username=:username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $user = $stmt->fetch();

        // Verify if user exists and password is correct
        if ($user !== false && password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['is_admin'] = $user['is_admin'];
            
            // Redirect user to home page or dashboard
            header('Location: index.php');
            exit(); // Stop script execution after redirection
        }
        else {
            // Display error message if username or password is incorrect
            $error = "Invalid username or password";
        }
    }
}
?>