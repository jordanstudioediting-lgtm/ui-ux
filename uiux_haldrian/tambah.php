<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <a href="index.php">Kembali</a>
    <br><br>

    <form action="proses_tambah.php" method="POST">
        <label>NIM :</label><br>
        <input type="text" name="nim" required><br><br>
        
        <label>Nama :</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>Jurusan :</label><br>
        <input type="text" name="jurusan" required><br><br>
        
        <button type="submit" name="submit">Simpan Data</button>
    </form>
</body>
</html>