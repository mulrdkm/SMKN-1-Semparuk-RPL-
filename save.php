<?php
$servername = "localhost"; // Nama server database
$username = "root"; // Nama pengguna untuk mengakses database
$password = ""; // Kata sandi untuk pengguna database
$dbname = "arsip"; // Nama database yang digunakan

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error); // Menampilkan pesan kesalahan jika koneksi gagal
}

// Ambil data dari form menggunakan metode POST
$no_urut = $_POST['no_urut'];
$kode_klasifikasi = $_POST['kode_klasifikasi'];
$uraian = $_POST['uraian'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];

// SQL untuk menyimpan data ke tabel 'arsip'
$sql = "INSERT INTO arsip (no_urut, kode_klasifikasi, uraian, tanggal, jumlah) VALUES ('$no_urut', '$kode_klasifikasi', '$uraian', '$tanggal', '$jumlah')";

// Mengeksekusi query dan memeriksa apakah berhasil
if ($conn->query($sql) === TRUE) {
    // Jika berhasil, arahkan ke halaman view
    header("Location: view.php");
    exit(); // Penting untuk memastikan bahwa skrip tidak melanjutkan eksekusi setelah redirect
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi ke database
$conn->close();
?>
