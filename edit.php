<?php
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM produk WHERE idProduk = $id";
    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">

        <div class="header">
            <img width="1080px" src="Images/Header.png" alt="">
        </div>

        <div class="nav-bar">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="visi.php">Visi & Misi</a></li>
                <li><a href="admin.php">Produk Kami</a></li>
                <li><a href="kontak.php">Kontak Kami</a></li>
                <li><a href="masuk.php">Keluar</a></li>
            </ul>
        </div>

        <div class="main">
            <h2>Edit Pesanan</h2>
            <table>
                <form action="update.php" method="post">
                    <tr>
                        <td></td>
                        <td>
                            <input type="text" name="id" value="<?php echo $row['idProduk']; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Nama Pengguna</td>
                        <td>
                            <input type="text" name="nama" value="<?php echo $row['namaProduk']; ?>">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Keterangan Produk</td>
                        <td><input type="text" name="keterangan" value="<?php echo $row['keteranganProduk']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Harga Produk</td>
                        <td><input type="text" name="harga" value="<?php echo $row['hargaProduk']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Status Produk</td>
                        <td><input type="text" name="status" value="<?php echo $row['statusProduk']; ?>"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </form>
            </table>
        </div>

        <div class="footer">
            <div class="teksFooter">
                Copyright &copy; 2024. Iwan Service - Kota Pematangsiantar
            </div>
        </div>
    </div>
</body>
</html>
<?php
    }
}
?>