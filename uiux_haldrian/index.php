<?php
// Memanggil file koneksi
include 'koneksi.php';

// Mengambil data dari tabel mahasiswa
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Projek UIUX Haldrian</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Mahasiswa</h2>
    
    <a href="tambah.php">[+] Tambah Mahasiswa Baru</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr bgcolor="#eee">
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        
        <?php 
        $no = 1;
        // Melakukan perulangan untuk menampilkan data
        while($row = mysqli_fetch_assoc($result)) { 
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['jurusan']; ?></td>
            <td>
                <a href="edit.php?nim=<?= $row['nim']; ?>">Edit</a> | 
                <a href="hapus.php?nim=<?= $row['nim']; ?>" onclick="return confirm('Yakin ingin menghapus mahasiswa dengan NIM <?= $row['nim']; ?>?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>