<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "INSERT INTO produk (namaProduk, hargaProduk, statusProduk) VALUES ('$nama', '$harga', '$stok')";

$koneksi->query($sql);
header("Location: adminInput.php");
?>