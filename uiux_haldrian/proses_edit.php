<?php
include 'koneksi.php';

// Cek apakah tombol UPDATE DATA sudah diklik
if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    // Query untuk mengupdate data nama dan jurusan berdasarkan NIM
    $query = "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan' WHERE nim='$nim'";
    $update = mysqli_query($koneksi, $query);

    if ($update) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!'); window.location='edit.php?nim=".$nim."';</script>";
    }
} else {
    die("Akses dilarang...");
}
?>