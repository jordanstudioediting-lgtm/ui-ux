<?php
include 'koneksi.php';

// Mengambil NIM yang dikirim dari halaman index.php
if (!isset($_GET['nim'])) {
    header('Location: index.php');
    exit;
}

$nim = $_GET['nim'];

// Mengambil data mahasiswa berdasarkan NIM untuk ditampilkan di form
$query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

// Jika data tidak ditemukan di database
if (mysqli_num_rows($result) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data - Minecraft Edition</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>EDIT STUDENT DATA</h2>
    
    <form action="proses_edit.php" method="POST">
        <label>STUDENT NIM (Locked) :</label><br>
        <input type="text" name="nim" value="<?= $data['nim']; ?>" readonly style="color: #ff5555; background-color: #1a1a1a;"><br>
        
        <label>STUDENT NAME :</label><br>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required autocomplete="off"><br>
        
        <label>MAJOR :</label><br>
        <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>" required autocomplete="off"><br>
        
        <div style="text-align: center; margin-top: 10px;">
            <button type="submit" name="update">UPDATE DATA</button>
            <a href="index.php" style="background-color: #b3312c; box-shadow: inset -3px -3px 0px #6d1e1b, inset 3px 3px 0px #e64b44;">CANCEL</a>
        </div>
    </form>
</body>
</html>