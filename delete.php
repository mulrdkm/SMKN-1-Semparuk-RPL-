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

// Ambil ID arsip dari query string menggunakan metode GET
$id = $_GET['id'];

// SQL untuk menghapus data dari tabel 'arsip' berdasarkan ID
$sql = "DELETE FROM arsip WHERE id=$id";

// Mengeksekusi query dan memeriksa apakah berhasil
if ($conn->query($sql) === TRUE) {
   header("Location: view.php"); // Jika berhasil, arahkan ke halaman view
   exit(); // Penting untuk memastikan bahwa skrip tidak melanjutkan eksekusi setelah redirect
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi ke database
$conn->close();
?>

