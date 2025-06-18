<?php
// auth.php - Authentication Logic
include 'db.php';
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM Users WHERE Username='$user' AND Password='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['role'] = $row['RoleID'];
    $_SESSION['username'] = $row['Username'];
    header("Location: dashboard.php");
} else {
    echo "Invalid login.";
}
?>