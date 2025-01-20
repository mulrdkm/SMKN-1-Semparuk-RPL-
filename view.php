<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menghubungkan file CSS untuk styling -->
    <link rel="stylesheet" href="style.css">
    <!-- Menambahkan link Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Styling untuk tabel */
        table {
            width: 90%; /* Mengatur lebar tabel */
            border-collapse: collapse; /* Menghilangkan jarak antar border sel */
            margin: 20px auto; /* Mengatur margin untuk tabel di tengah halaman */
        }
        th, td {
            border: 1px solid #ddd; /* Border untuk sel */
            padding: 12px; /* Padding untuk sel */
            text-align: left; /* Penataan teks ke kiri */
            vertical-align: top; /* Menyelaraskan isi sel ke atas */
        }
        th {
            background-color: #f8f9fa; /* Warna latar belakang untuk header */
            color: #333; /* Warna teks untuk header */
            font-weight: bold; /* Menebalkan teks untuk header */
        }
        td {
            max-width: 200px; /* Batas lebar maksimum untuk sel */
            overflow: hidden; /* Menyembunyikan teks yang melebihi batas lebar */
            text-overflow: ellipsis; /* Menambahkan tiga titik (...) jika teks terlalu panjang */
            white-space: normal; /* Mengizinkan pemutusan baris dalam teks */
        }
        table {
            table-layout: fixed; /* Memastikan lebar kolom tetap */
        }
        /* Styling untuk tampilan cetak */
        @media print {
            .no-print, .aksi {
                display: none !important; /* Menyembunyikan elemen tertentu saat mencetak */
            }
            body {
                font-family: Arial, sans-serif; /* Mengatur font saat mencetak */
                margin: 0; /* Menghapus margin default untuk cetakan */
            }
            table {
                width: 100%; /* Mengatur lebar tabel saat mencetak */
                border-collapse: collapse; /* Menghilangkan jarak antar border saat mencetak */
                margin-top: 20px; /* Memberi jarak atas pada tabel saat mencetak */
            }
            th, td {
                border: 1px solid #000000; /* Mengatur border hitam untuk sel saat mencetak */
                padding: 8px; /* Mengatur padding untuk sel saat mencetak */
                text-align: left; /* Penataan teks ke kiri */
            }
            th {
                background-color: #f2f2f2; /* Warna latar belakang untuk header saat mencetak */
            }
            h1 {
                display: none !important; /* Menyembunyikan judul saat mencetak */
            }
        }
    </style>
</head>
<body>
    <!-- Judul halaman -->
    <h1>DAFTAR ARSIP</h1>
    
    <!-- Tabel untuk menampilkan data arsip -->
    <table>
        <thead>
            <tr>
                <th>NO URUT</th>
                <th>KODE KLASIFIKASI</th>
                <th>URAIAN INFORMASI ARSIP</th>
                <th>TANGGAL</th>
                <th>JUMLAH</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Koneksi ke database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "arsip";

            // Membuat koneksi
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Cek koneksi
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Query untuk mengambil data arsip
            $sql = "SELECT id, no_urut, kode_klasifikasi, uraian, tanggal, jumlah FROM arsip";
            $result = $conn->query($sql);

            // Mengecek apakah ada hasil
            if ($result->num_rows > 0) {
                // Menampilkan data setiap baris
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row["no_urut"]) . "</td>
                            <td>" . htmlspecialchars($row["kode_klasifikasi"]) . "</td>
                            <td>" . htmlspecialchars($row["uraian"]) . "</td>
                            <td>" . htmlspecialchars($row["tanggal"]) . "</td>
                            <td>" . htmlspecialchars($row["jumlah"]) . "</td>
                            <td class='aksi'>
                                <a href='delete.php?id=" . urlencode($row["id"]) . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>
                                   <i class='fas fa-trash'></i>
                                 </a>
                          </tr>";
                }
            } else {
                // Jika tidak ada data
                echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
            }

            // Menutup koneksi
            $conn->close();
            ?>
        </tbody>
    </table>
    
    <!-- Tombol untuk mencetak halaman dan link kembali ke form -->
    <br>
    <button class="no-print" onclick="window.print()">Cetak Halaman Ini</button>
    <a href="index.php" class="no-print">Kembali ke Form</a>
</body>
</html>

