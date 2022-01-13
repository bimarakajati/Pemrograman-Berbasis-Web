<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbtamu";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal...");
}
//echo "Koneksi ke database berhasil...";