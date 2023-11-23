<?php
session_start();
require_once('conexao.php');

// Check if the user is logged in
if (isset($_SESSION['user_id'], $_SESSION['username'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page (adjust the path as needed)
    header('Location: login.php');
    exit();
} else {
    // If the user is not logged in, simply redirect to the login page
    header('Location: login.php');
    exit();
}
?>