<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Simulate login process
if ($username === 'user' && $password === 'password') {
    $_SESSION['username'] = $username;
    header('Location: products.php');
} else {
    echo "Invalid username or password";
}
?>
