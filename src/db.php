<?php
$host = 'db';
$user = 'root';
$password = 'root';
$database = 'mcca';

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Periksa koneksi berhasil
echo "Koneksi database berhasil!";
?>
