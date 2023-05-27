<?php
$host = 'db';
$user = 'root';
$password = 'root';
$database = 'mcca';

$connection = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$connection) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$query = "SELECT id, name, email FROM `users`";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query error: " . mysqli_error($connection));
}

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br><br>";
    }
} else {
    echo "Tidak ada data.";
}

mysqli_close($connection);
?>
