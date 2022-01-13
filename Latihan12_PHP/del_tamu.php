<?php
include "koneksi.php";
$idtamu = $_GET['idtamu'];

$sql = "delete from tamu where idtamu='$idtamu'";
$hasil = mysqli_query($conn, $sql);

if ($hasil)
    header("location:daftar_tamu.php");
else
    echo " hapus data gagal...";
