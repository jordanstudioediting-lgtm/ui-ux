<?php
include 'koneksi.php';

// Cek apakah ada data NIM yang dikirim dari halaman index
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Query untuk menghapus data berdasarkan NIM
    $query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    $hapus = mysqli_query($koneksi, $query);

    // Cek apakah proses hapus berhasil
    if ($hapus) {
        echo "<script>alert('Boom! Data berhasil dihancurkan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location='index.php';</script>";
    }
} else {
    die("Akses dilarang...");
}
?>