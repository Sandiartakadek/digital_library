<?php
// session include here
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT user_id, username, name, password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    $stmt->bind_result($id, $username, $name, $stored_password, $role);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (md5($password) == $stored_password) { 
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;

            header("Location: ../index.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Wrong Password!";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['login_error'] = "Username not found!";
        header("Location: login.php");
        exit();
    }

    $stmt->close();
} else {
    header("Location: login.php");
    exit();
}

$conn->close();
?>
