<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">

        <div class="header">
            <img width="1080px" src="Images/Header.png" alt="">
        </div>

        <div class="nav-bar">
            <ul>
                <li><a href="adminInput.php">Input Produk</a></li>
                <li><a href="admin.php">Data Produk</a></li>
                <li><a href="tampilPesan.php">Pesanan</a></li>
                <li><a href="masuk.php">Keluar</a></li>
            </ul>
        </div>

        <div class="main">
            <div class="content">
                <h2>Formulir Pemesanan Produk</h2>
                <p>
                    <table>
                        <form action="input.php" method="post">
                            <tr>
                                <td>Nama Produk</td>
                                <td><input type="text" name="nama"></td>
                            </tr>
                            
                            <tr>
                                <td>Harga</td>
                                <td><input type="text" name="harga"></td>
                            </tr>

                            <tr>
                                <td>Stok</td>
                                <td><input type="text" name="stok"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="submit" value="Simpan"></td>
                            </tr>
                        </form>
                    </table>
                </p>
            </div>
        </div>

        <div class="footer">
            <div class="teksFooter">
                Copyright &copy; 2024. Iwan Service - Kota Pematangsiantar
            </div>
        </div>
    </div>
</body>
</html>