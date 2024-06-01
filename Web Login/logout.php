<?php
session_start();

unset($_SESSION['auth_id']);

header("Location: http://{$_SERVER['HTTP_HOST']}/login.php");
die();
