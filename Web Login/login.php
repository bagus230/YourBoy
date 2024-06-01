<?php
session_start();
if (isset($_SESSION['auth_id'])) {
    header("Location: http://{$_SERVER['HTTP_HOST']}");
    die();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .content {
            width: 100vh;
            padding: 10px;
        }

        input[type=text] {
            padding: 3px;
            width: 100%;
            border: 1px solid;
        }

        input[type=password] {
            padding: 3px;
            width: 100%;
            border: 1px solid;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Login</h1>
        <form action="auth.php" method="POST">
            <div>
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <br>
            <?php if (isset($_SESSION['error'])) : ?>
                <p><?= $_SESSION['error'] ?></p>
            <?php
                unset($_SESSION['error']);
            endif;
            ?>
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>