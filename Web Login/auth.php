<?php
session_start();

require_once "koneksi.php";

$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$_POST['username']}' LIMIT 1");

$user = mysqli_fetch_assoc($result);

mysqli_close($conn);

if (is_null($user)) {
    $_SESSION['error'] = "Username & password salah";
    header("Location: http://localhost:8000/login.php");
    die();
}

if ($user['password'] != $_POST['password']) {
    $_SESSION['error'] = "Username & password salah";
    header("Location: http://localhost:8000/login.php");
    die();
}

$_SESSION['auth_id'] = $user['id'];
header("Location: http://localhost:8000");
die();
