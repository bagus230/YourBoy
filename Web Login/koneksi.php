<?php

$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}
