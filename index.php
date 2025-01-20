<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Arsip</title>
    <!-- Menghubungkan file CSS untuk styling -->
    <link rel="stylesheet" href="style.css">
    <!-- Menambahkan link Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Judul halaman -->
    <h1>SURAT ARSIP</h1>
    
    <!-- Form untuk memasukkan data arsip -->
    <form action="save.php" method="post">
        <!-- Input untuk nomor urut arsip -->
        <label for="no_urut">NO URUT:</label>
        <input type="text" name="no_urut" id="no_urut" required>

        <!-- Input untuk kode klasifikasi arsip -->
        <label for="kode_klasifikasi">KODE KLASIFIKASI:</label>
        <input type="text" name="kode_klasifikasi" id="kode_klasifikasi" required>

        <!-- Input untuk uraian informasi arsip -->
        <label for="uraian">URAIAN INFORMASI ARSIP:</label>
        <textarea name="uraian" id="uraian" rows="4" required></textarea>

        <!-- Input untuk tanggal arsip -->
        <label for="tanggal">TANGGAL:</label>
        <input type="date" name="tanggal" id="tanggal" required>

        <!-- Input untuk jumlah arsip -->
        <label for="jumlah">JUMLAH:</label>
        <input type="number" name="jumlah" id="jumlah" required>

        <!-- Tombol untuk mengirimkan form -->
        <input type="submit" value="Simpan">
    </form>

    <!-- Link untuk melihat daftar arsip yang telah disimpan -->
    <a href="view.php">Lihat Daftar Arsip</a>
</body>
</html>


