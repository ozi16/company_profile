<?php
$host_koneksi = 'localhost';
$username_koneksi = 'root';
$password_koneksi = '';
$database_koneksi = 'angkatan3_compro';

$koneksi = mysqli_connect($host_koneksi, $username_koneksi, $password_koneksi, $database_koneksi);

if (!$koneksi) {
    echo "Koneksi database gagal";
}
// if (!$koneksi) {
//     die("Koneksi database gagal: " . mysqli_connect_error());
// }


