<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #1f618d;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

    </style>
</head>
<body>

</table>

</body>
</html>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Tugas</th>
        <th>Quiz</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Nilai Akhir</th>
        <th>Grade</th>
    </tr>

    <?php
    include "koneksi.php"; // Pastikan file koneksi.php benar
    
    $ambildata = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

    // Cek apakah query berhasil
    if ($ambildata) {
        while ($tampil = mysqli_fetch_array($ambildata)) {
            echo "
            <tr>
                <td>{$tampil['NIM']}</td>
                <td>{$tampil['Nama_Mahasiswa']}</td>
                <td>{$tampil['Tugas']}</td>
                <td>{$tampil['Quiz']}</td>
                <td>{$tampil['UTS']}</td>
                <td>{$tampil['UAS']}</td>
                <td>{$tampil['Nilai_Akhir']}</td>
                <td>{$tampil['Grade']}</td>
            </tr>";
            
        }
    } else {
        // Jika query gagal, tampilkan pesan error
        echo "<tr><td colspan='9'>Tidak ada data ditemukan atau terjadi kesalahan pada query.</td></tr>";
    }