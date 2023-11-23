<?php
session_start();
require_once('conexao.php');

if ($_SESSION['is_admin'] != 1) {
    header('Location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];

    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password, is_admin) VALUES ('$newUsername', '$hashedPassword', 0)";
    if ($conn->query($sql) === TRUE) {
        echo "New account created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<html>
<body>
    <h2>Admin Panel</h2>
    <form method="post" action="admin.php">
        New Username: <input type="text" name="new_username" required><br>
        New Password: <input type="password" name="new_password" required><br>
        <input type="submit" value="Add Account">
    </form>
</body>
</html>