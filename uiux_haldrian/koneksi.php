<?php
// 1. Konfigurasi Database
$host     = "localhost";
$username = "root";
$password = "";
$database = "campus"; // Jalankan/ubah sesuai nama database di phpMyAdmin

// 2. Membuat Koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// 3. Memeriksa Koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Opsi: Bisa dihapus jika sudah berhasil agar tidak mengganggu tampilan web
echo "Koneksi database berhasil!"; 
?>