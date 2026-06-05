<?php
include 'koneksi.php';

// Cek apakah tombol submit sudah diklik
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    // Query memasukkan data sesuai dengan 3 kolom tabelmu
    $query = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')";
    $simpan = mysqli_query($koneksi, $query);

    if ($simpan) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data!'); window.location='tambah.php';</script>";
    }
}
?>