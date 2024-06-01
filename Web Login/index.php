<?php
session_start();
require_once "koneksi.php";

if (!isset($_SESSION['auth_id'])) {
    header("Location: http://{$_SERVER['HTTP_HOST']}/login.php");
    die();
}

$query = "SELECT username FROM user WHERE id = {$_SESSION['auth_id']}";
$result = mysqli_query($conn, $query);

if($result) {
    $row = mysqli_fetch_assoc($result);
    $username = $row["username"];
} else {
    $username = "Tidak ditemukan";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Selamat Datang <?= $username ?> User dengan ID <?= $_SESSION['auth_id'] ?></h1>
    <br>
    <a href="/logout.php">Log Out</a>
</body>

</html>