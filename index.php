<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>

        <a href="tambah.php">Tambah Barang</a><br><br>

        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Katagori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>

            <?php if ($result && mysqli_num_rows($result) > 0): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['gambar']; ?></td>  <!-- teks saja -->
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td><?= $row['harga_jual']; ?></td>
                    <td><?= $row['harga_beli']; ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a>
                        <a href="hapus.php?id=<?= $row['id_barang']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>
