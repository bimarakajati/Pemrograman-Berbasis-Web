<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbtamu";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("koneksi gagal...");
}
//echo "koneksi ke database berhasil............";
