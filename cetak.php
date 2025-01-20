<!DOCTYPE html>
<html>
<head>
    <title>Cetak Print dari Database dengan PHP</title>
    <style>
        /* Styling untuk tampilan layar */
        body {
            font-family: Arial, sans-serif; /* Mengatur jenis font untuk halaman */
            margin: 20px; /* Memberikan jarak di sekitar body */
        }
        table {
            width: 100%; /* Tabel akan mengambil lebar penuh dari container */
            border-collapse: collapse; /* Menghapus jarak antara border sel tabel */
        }
        th, td {
            border: 1px solid #000000; /* Menambahkan border hitam pada sel tabel */
            padding: 8px; /* Memberikan jarak di dalam sel tabel */
            text-align: left; /* Mengatur teks agar rata kiri */
        }
        th {
            background-color: #f2f2f2; /* Memberikan warna latar belakang pada header tabel */
        }
        .no-print {
            display: none; /* Elemen dengan kelas 'no-print' tidak akan ditampilkan */
        }
        @media print {
            /* Aturan untuk tampilan saat mencetak */
            .no-print, .aksi {
                display: none !important; /* Menyembunyikan elemen saat mencetak */
            }
            body {
                font-family: Arial, sans-serif; /* Mengatur jenis font untuk halaman cetak */
                margin: 0; /* Menghapus margin default untuk cetakan */
            }
            table {
                width: 100%; /* Tabel mengambil lebar penuh pada cetakan */
                border-collapse: collapse; /* Menghapus jarak antara border sel tabel */
                margin-top: 20px; /* Memberi jarak atas pada tabel di cetakan */
            }
            th, td {
                border: 1px solid #000000; /* Border pada sel tabel */
                padding: 8px; /* Jarak dalam sel */
                text-align: left; /* Rata kiri untuk teks */
            }
            th {
                background-color: #f2f2f2; /* Warna latar belakang pada header tabel */
            }
        }
    </style>
</head>
    <script>
        window.print(); // Menjalankan perintah print saat halaman dimuat
    </script>
</body>
</html>
