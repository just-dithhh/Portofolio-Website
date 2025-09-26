<?php
$servername = "localhost";
$username = "root"; // Ubah kalau username-mu beda
$password = ""; // Kalau ada password, isi di sini
$database   = "portfolio"; // Nama database yang kamu mau pakai

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else{
    echo "Koneksi Berhasil";
}
?>
